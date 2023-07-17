

<?php
class Cart1 {
  // (A) CONSTRUCTOR - CONNECT TO DATABASE
  private $pdo = null;
  private $stmt = null;
  public $lastID = null;
  public $error = "";
  function __construct() {
    $this->pdo = new PDO(
      "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET,
      DB_USER, DB_PASSWORD, [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
  }

  // (B) DESTRUCTOR - CLOSE DATABASE CONNECTION
  function __destruct() {
    if ($this->stmt !== null) { $this->stmt = null; }
    if ($this->pdo !== null) { $this->pdo = null; }
  }

  // (C) HELPER - EXECUTE SQL QUERY
  function exec ($sql, $data=null) {
    $this->stmt = $this->pdo->prepare($sql);
    $this->stmt->execute($data);
  }

  // (D) GET PRODUCTS
  function getBuildings ($cart=false) {
    // (D1) GET CART ITEMS - EMPTY
    if ($cart && $_SESSION["cartC"]==0) { return null; }

    // (D2) GET ALL buildings OR ITEMS IN CART?
    $sql = "SELECT * FROM `buildings`";
    $data = null;
    if ($cart) {
      $sql .= " WHERE `pid` IN (";
      $sql .= str_repeat("?,", count($_SESSION["cartI"]) - 1) . "?";
      $sql .= ")";
      $data = array_keys($_SESSION["cartI"]);
    }

    // (D3) FETCH PRODUCTS
    $this->exec($sql, $data);
    unset($sql); $data = [];
    while ($r = $this->stmt->fetch()) { $data[$r["pid"]] = $r; }

    // (D4) REMOVE ILLEGAL CART ITEMS
    if ($cart) { foreach ($_SESSION["cartI"] as $id=>$qty) {
      if (isset($data[$id])) { $data[$id]["qty"] = $qty; }
      else {
        $_SESSION["cartC"] -= $_SESSION["cartI"][$id];
        unset($_SESSION["cartI"][$id]);
      }
    }}

    // (D5) DONE
    return count($data)!=0 ? $data : null ;
  }

  // (E) CHECKOUT
  function checkout ($name, $email) {
    // (E1) GET ITEMS + CHECK
    $items = $this->getBuildings(true);
    if ($_SESSION["cartC"] == 0) {
      $this->error = "Пусто";
      return false;
    }

    // (E2) AUTO-COMMIT OFF
    $this->pdo->beginTransaction();

    // (E3) MAIN ORDER
    $this->exec("INSERT INTO `orders` (`name`, `email`) VALUES (?,?)", [$name, $email]);
    $oid = $this->pdo->lastInsertId();

    // (E4) ORDER ITEMS
    $sql = "INSERT INTO `orders_items` (`oid`, `name`, `price`, `qty`) VALUES ";
    $sql .= str_repeat("(?,?,?,?),", count($_SESSION["cartI"]));
    $sql = substr($sql, 0, -1) . ";";
    $data = [];
    foreach ($_SESSION["cartI"] as $pid=>$qty) {
      array_push($data, $oid, $items[$pid]["name"], $items[$pid]["price"], $qty);
    }
    $this->exec($sql, $data);

    // (E5) COMMIT + EMPTY CART
    $this->pdo->commit();
    $_SESSION["cartI"] = [];
    $_SESSION["cartC"] = 0;
    return true;
  }
}

// (F) DATABASE SETTINGS - CHANGE TO YOUR OWN!
define("DB_HOST", "localhost");
define("DB_NAME", "1-database");
define("DB_CHARSET", "utf8mb4");
define("DB_USER", "root");
define("DB_PASSWORD", "");

// (G) NEW CART OBJECT
$_CART1 = new Cart1();



