<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Главная страница</title>
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
      <li><a href="glav.php">Главная</a></li>
      <li><a href="zayav.php">Заявки</a></li>
      <li><a href="index.php">Авторизация</a>
        <ul>
          <li><a href="register.php">Регистрация</a></li>
          
        </ul>
      </li>
      
    </ul>
    <br><br><br>

     <div class="texts">Главная страница</div>
 
    <p>hgjhghjghj </p>
 
  </body>
</html>
