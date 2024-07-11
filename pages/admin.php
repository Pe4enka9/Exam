<?php
session_start();

require_once '../vendor/admin_output.php';

if ($_SESSION['user']) {
  header('Location: ./app.php');
} else if (!$_SESSION['admin']) {
  header('Location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../css/admin.css" />
  <title>Панель администратора</title>
</head>

<body>
  <form action="../vendor/update_app.php" method="post" class="admin">
    <h2></h2>
    <h1>Панель администратора</h1>

    <div class="block">
      <div class="elem num_app">
        <label>№ заявления</label>
        <?php
        foreach ($_SESSION['app'] as $app) {
          echo "<input type=\"hidden\" name=\"id[]\" value=\"{$app['id']}\">";
          echo "<div>{$app['id']}</div>";
        }
        ?>
      </div>

      <div class="elem full_name">
        <label>ФИО</label>
        <?php
        foreach ($_SESSION['app'] as $app) {
          echo "<div>{$app['user_id']}</div>";
        }
        ?>
      </div>

      <div class="elem gov_num">
        <label>Гос.номер</label>
        <?php
        foreach ($_SESSION['app'] as $app) {
          echo "<div>{$app['govNumber']}</div>";
        }
        ?>
      </div>

      <div class="elem description">
        <label>Описание нарушения</label>
        <?php
        foreach ($_SESSION['app'] as $app) {
          echo "<textarea readonly name=\"description\">{$app['description']}</textarea>";
        }
        ?>
      </div>

      <div class="elem status">
        <label>Статус</label>
        <?php
        foreach ($_SESSION['app'] as $app) {
          echo "<select name=\"applicationStatus_id[]\">";
          echo "<option value=\"1\"" . ($app['applicationStatus_id'] == 1 ? ' selected' : '') . ">Новое</option>";
          echo "<option value=\"2\"" . ($app['applicationStatus_id'] == 2 ? ' selected' : '') . ">Подтверждено</option>";
          echo "<option value=\"3\"" . ($app['applicationStatus_id'] == 3 ? ' selected' : '') . ">Отклонено</option>";
          echo "</select>";
        }
        ?>
      </div>
    </div>

    <div id="success">
      <?php
      echo $_SESSION['success'];
      unset($_SESSION['success']);
      ?>
    </div>

    <div class="buttons">
      <input type="submit" id="btn" value="Изменить">
      <a id="exit" href="../vendor/logout.php">Выйти</a>
    </div>
  </form>
</body>

</html>