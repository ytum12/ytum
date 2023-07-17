 <!DOCTYPE html>
<html>
  <head>
    <title>Shopping Page Demo</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="4a-shop.css">
    <script src="4b-cart.js"></script>
  </head>
  <body>
    <!-- (A) PRODUCTS + SHOPPING CART -->
    <div id="wrap">
      <!-- (A1) HEADER -->
      <div id="head">
        <div id="iCart" onclick="cart.show()">
          Корзина <span id="cCart">0</span>
        </div>
      </div>

      <!-- (A2) PRODUCTS -->
      <div id="products"><?php
        require "2-lib-cart.php";
        $products = $_CART->getProducts();
        foreach ($products as $i=>$p) { ?>
        <div class="pCell">
          <img class="pImg" src="images/<?=$p["image"]?>">
          <div class="pName"><?=$p["name"]?></div>
          <div class="pPrice"><?=$p["price"]?>₽</div>
          <input class="pAdd button" type="button" value="Купить" onclick="cart.add(<?=$i?>)">
        </div>
        <?php } ?>
      </div>

      <!-- (A3) CART ITEMS -->
      <div id="wCart">
        <span id="wCartClose" class="button" onclick="cart.toggle(cart.hWCart, false)">&#8678;</span>
        <h2>SHOPPING CART</h2>
        <div id="cart"></div>
      </div>
    </div>

    <!-- (B) CHECKOUT FORM -->
    <div id="checkout"><form onsubmit="return cart.checkout()">
      <div id="coClose" class="button" onclick="cart.toggle(cart.hCO, false)">X</div>
      <label>Name</label>
      <input type="text" id="coName" required value="Jon Doe">
      <label>Email</label>
      <input type="email" id="coEmail" required value="jon@doe.com">
      <input class="button" type="submit" value="Checkout">
    </form></div>
  </body>
</html>