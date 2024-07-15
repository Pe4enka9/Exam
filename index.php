<?php
session_start();
require_once 'connect.php';

if (isset($_SESSION['user'])) {
  header('Location: ./pages/app.php');
} else if (isset($_SESSION['admin'])) {
  header('Location: ./pages/admin.php');
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="./css/main.css" />
  <title>Нарушениям.Нет</title>
</head>

<body>
  <form action="vendor/auth.php" method="post" class="auth">
    <h1>Авторизация</h1>

    <div class="inp_block login_block">
      <label for="login">Логин</label>
      <input type="text" name="login" id="login" autocomplete="off" placeholder="Введите логин" />
    </div>

    <div class="inp_block pass_block">
      <label for="pass">Пароль</label>
      <input type="password" name="pass" id="pass" autocomplete="off" placeholder="Введите пароль" />
    </div>

    <input type="submit" id="btn" value="Войти" />

    <a id="reg" href="pages/register.php">Зарегистрироваться</a>

    <span>
      <?php
      if (isset($_SESSION['error'])) {
        echo $_SESSION['error'];
        unset($_SESSION['error']);
      }
      ?>
    </span>
  </form>
</body>

</html>