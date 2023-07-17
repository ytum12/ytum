<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location: profile.php');
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" type="text/css" href="magaz/css/main.css">

<style>
      #navbar ul{
        display: none;
        background-color: #e3e3e3;
        position: absolute;
        top: 100%;
      }
      #navbar li:hover ul { display: block; }
      #navbar, #navbar ul{
        margin: 0;
        padding: 0;
        list-style-type: none;
      }
      #navbar {
        height: 40px;
        background-color: #e3e3e3;
        padding-left: 25px;
        min-width: 470px;
      }
      #navbar li {
        float: left;
        position: relative;
        height: 100%;
      }
      #navbar li a {
        font-family: Montserrat, sans-serif;
        display: block;
        padding: 10px;
        width: 130px;
        color: #000000;
        text-decoration: none;
        text-align: center;
      }
      #navbar ul li { float: none; }
      #navbar li:hover { background-color: #D3D3D3; }
      #navbar ul li:hover { background-color: #D3D3D3; }
    </style>







</head>
<body>
<div class="avto">
 <div class="texts">Регистрация</div>
 <br><br><br>


    <!-- Форма регистрации -->
<div class="bod">
    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
        <label>ФИО</label>
        <input type="text" name="full_name" placeholder="Введите свое полное имя">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <label>Подтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль">

        <button class="button" type="submit">Войти</button>
        <p>
            У вас уже есть аккаунт? - <a class="o" href="/">авторизируйтесь</a>!
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </div>
    </form>
</div>
</body>
</html>