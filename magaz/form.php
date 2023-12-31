<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Кнопка, используемая для открытия контактной формы-фиксируется в нижней части страницы */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* Всплывающая форма-скрыта по умолчанию */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
}

/* Добавление стилей в контейнер форм */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Поля ввода полной ширины */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* Когда входы получают фокус, сделайте что-нибудь */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Установите стиль для кнопки отправить/кнопка */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Добавьте красный цвет фона к кнопке отмена */
.form-container .cancel {
  background-color: red;
}

/* Добавьте некоторые эффекты наведения на кнопки */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
<body>

<h1>Всплывающая форма</h1>

<p>Нажмите на кнопку внизу этой страницы, чтобы открыть форму входа.</p>
<p>Обратите внимание, что кнопка и форма фиксированы - они всегда будут располагаться в нижней части окна браузера.</p>

<button class="open-button" onclick="openForm()">Открыть форму</button>

<div class="form-popup" id="myForm">
  <form action="../action_page.php" class="form-container">
    <h1>Вход</h1>

    <label for="email"><b>Почта</b></label>
    <input type="text" placeholder="Ваша почта" name="email" required>

    <label for="psw"><b>Пароль</b></label>
    <input type="password" placeholder="Ваш пароль" name="psw" required>

    <button type="submit" class="btn">Вход</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Закрыть</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>

