<?php
session_start();

if ($_SESSION['user']) {
  header('Location: ./app.php');
} else if ($_SESSION['admin']) {
  header('Location: ./admin.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/register.css" />
  <title>Регистрация</title>
</head>

<body>
  <form action="../vendor/create.php" method="post" class="register" id="form">
    <h1>Регистрация</h1>

    <div class="data_block">
      <div class="inp_block login_block">
        <label for="login">Логин</label>
        <input type="text" name="login" id="login" autocomplete="off" placeholder="Введите логин" />
        <span class="error" id="loginError">
          <?php
          echo $_SESSION['loginError'];
          unset($_SESSION['loginError']);
          ?>
        </span>
      </div>

      <div class="inp_block pass_block">
        <label for="pass">Пароль</label>
        <input type="password" name="pass" id="pass" autocomplete="off" placeholder="Введите пароль" />
        <span class="error" id="passwordError"></span>
      </div>

      <div class="inp_block lastName_block">
        <label for="lastName">Фамилия</label>
        <input type="text" name="lastName" id="lastName" autocomplete="off" placeholder="Введите фамилию" />
        <span class="error" id="lastNameError"></span>
      </div>

      <div class="inp_block name_block">
        <label for="name">Имя</label>
        <input type="text" name="name" id="name" autocomplete="off" placeholder="Ввведите имя" />
        <span class="error" id="nameError"></span>
      </div>

      <div class="inp_block surname_block">
        <label for="surname">Отчество</label>
        <input type="text" name="surname" id="surname" autocomplete="off" placeholder="Ввведите отчество" />
        <span class="error" id="surnameError"></span>
      </div>

      <div class="inp_block tel_block">
        <label for="tel">Номер телефона</label>
        <input type="tel" name="tel" id="tel" autocomplete="off" placeholder="+7(000)-000-00-00" />
        <span class="error" id="telError"></span>
      </div>

      <div class="inp_block email_block">
        <label for="email">E-mail</label>
        <input type="text" name="email" id="email" autocomplete="off" placeholder="Ввведите электронную почту" />
        <span class="error" id="emailError"></span>
      </div>
    </div>

    <input type="submit" id="btn" value="Зарегистрироваться" />

    <a id="auth" href="../index.php">Авторизоваться</a>
  </form>

  <script src="https://unpkg.com/imask"></script>
  <script src="../js/register.js"></script>
</body>

</html>