<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="magaz/css/style.css">
    <link rel="stylesheet" type="text/css" href="magaz/css/style2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="magaz/css/4a-shop.css">
    <link rel="stylesheet" type="text/css" href="assets/css/profile.css">
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
        font-size: %;
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
    <nav class="navMenu">
      <a href="index1.php">Перейти на главную страницу</a> 
      <div class="dot"></div>
    </nav>
    <hr>



    <div class="texts">Личный кабинет</div>
 <br><br><br>
    <div class="lich">
        <!-- Профиль -->
    <form>
        
        <h2 style="margin: 10px 0;">Здравствуйте <?= $_SESSION['user']['full_name'] ?>!</h2>
       <br><br><br>
        <a href="vendor/logout.php" class="button">Выход</a>
    </form>
</div>

</body>
</html> 