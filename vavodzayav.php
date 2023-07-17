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
    <title>Корзина</title>
    <link rel="stylesheet" href="assets/css/main.css">
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
  
    <ul id="navbar">
      <li><a href="glav2.php">Главная</a></li>
      <li><a href="vavodzayav.php">Корзина</a></li>
      <li><a href="profile.php">Личный кабинет</a></li>
    </ul>
 
    <br><br><br>

 <div class="texts"></div>
 <br><br><br>
 
 








  </body>
</html>
