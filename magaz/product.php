<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Главная страница</title>
  <link rel="stylesheet" href="css/4a-shop.css">
  <script src="4b-cart.js"></script>
  <link rel="stylesheet" type="text/css" href="css/mainmb.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<div class="fon">
  <div class="appblock">
    <div class="block1">
      <a href="../index.php"><img src="img/logo.png"></a>
    </div>
    <div class="block4">
      <a href="../autoriz.php" class="closing-button"><span>Авторизация</span></a>
    </div>
</div>
</div>

<div class="zagtovars">
  <h1><a name="prod">Строительные материалы:</a></h1>
</div>

      <div id="products">
        <?php require "2-lib-cart.php";
        $products = $_CART->getProducts();
        foreach ($products as $i=>$p) { ?>
        <div class="pCell">
          <img class="pImg" src="images/<?=$p["image"]?>">
          <div class="pName"><?=$p["name"]?></div>
          <div class="pPrice"><?=$p["price"]?> ₽/шт</div>
          <input class="pAdd button" type="button" value="Необходимо авторизоваться">
        </div>
        <?php } ?>
      </div>
          <hr>
<div class="zagtovars">
  <h1><a name="prod">Готовые постройки</a></h1>
</div>
      <div id="products">
        <?php require "3-lib-cart.php";
        $products1 = $_CART1->getBuildings();
        foreach ($products1 as $i=>$p) { ?>
        <div class="pCell">
          <img class="pImg" src="images/<?=$p["image"]?>">
          <div class="pName"><?=$p["name"]?></div>
          <div class="pPrice" style="margin-bottom: 20px;"><?=$p["price"]?> ₽/шт</div>
          <a class="pAdd button" type="button" value="Оформить заказ">Необходимо авторизоваться</a>
        </div>
        <?php } ?>
      </div>

<!-- HTML модального окна -->
<div id="openModal" class="modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Оформление заказа</h3>
        <a href="#close" title="Close" class="close">×</a>
      </div>
      <div class="modal-body">    
 <div class="bod">
    <form  method="post" enctype="multipart/form-data">
        <label>Имя</label>
        <input type="text" name="full_name" placeholder="Введите свое полное имя">
        <label>Почта</label>
        <input type="text" name="login" placeholder="Введите свою почту">
        <label>Номер телефона</label>
        <input type="password" name="password" placeholder="Введите номер телефона">

        <button class="button" type="submit">Отправить</button>
    </div>
    </form>
</div>
      </div>
    </div>
  </div>
</div>









      <div class="btn-up btn-up_hide"></div>
  <script>
    const btnUp = {
      el: document.querySelector('.btn-up'),
      show() {
        // удалим у кнопки класс btn-up_hide
        this.el.classList.remove('btn-up_hide');
      },
      hide() {
        // добавим к кнопке класс btn-up_hide
        this.el.classList.add('btn-up_hide');
      },
      addEventListener() {
        // при прокрутке содержимого страницы
        window.addEventListener('scroll', () => {
          // определяем величину прокрутки
          const scrollY = window.scrollY || document.documentElement.scrollTop;
          // если страница прокручена больше чем на 400px, то делаем кнопку видимой, иначе скрываем
          scrollY > 400 ? this.show() : this.hide();
        });
        // при нажатии на кнопку .btn-up
        document.querySelector('.btn-up').onclick = () => {
          // переместим в начало страницы
          window.scrollTo({
            top: 0,
            left: 0,
            behavior: 'smooth'
          });
        }
      }
    }
    btnUp.addEventListener();
  </script>
  </body>
</html>