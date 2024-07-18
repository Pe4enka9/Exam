<?php
session_start();

require_once '../vendor/admin_output.php';

if (isset($_SESSION['user'])) {
  header('Location: ./app.php');
} else if (!isset($_SESSION['admin'])) {
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
    <div class="buttons">
      <input type="submit" id="btn" value="Изменить">
      <h1>Панель администратора</h1>
      <a id="exit" href="../vendor/logout.php">Выйти</a>
    </div>

    <?php
    if (isset($_SESSION['success'])) {
      echo $_SESSION['success'];
      unset($_SESSION['success']);
    }
    ?>

    <label>№ заявления</label>
    <label>ФИО</label>
    <label>Гос.номер</label>
    <label>Описание нарушения</label>
    <label>Статус</label>

    <?php
    foreach ($_SESSION['app'] as $app) {
      echo '<div class="block">';
      echo '<div class="elem num_app">';
      echo '<input type="hidden" name="id[]" value="' . $app['id'] . '">';
      echo "<div>{$app['id']}</div>";
      echo '</div>';

      echo '<div class="elem full_name">';
      echo "<div>{$app['user_fullName']}</div>";
      echo '</div>';

      echo '<div class="elem gov_num">';
      echo "<div>{$app['govNumber']}</div>";
      echo '</div>';

      echo '<div class="elem description">';
      echo "<div name=\"description\">{$app['description']}</div>";
      echo '</div>';

      echo '<div class="elem status">';
      echo "<select class=\"select\" name=\"applicationStatus_id[]\">";
      echo "<option hidden value=\"1\"" . ($app['applicationStatus_id'] == 1 ? ' selected' : '') . ">Новое</option>";
      echo "<option value=\"2\"" . ($app['applicationStatus_id'] == 2 ? ' selected' : '') . ">Подтверждено</option>";
      echo "<option value=\"3\"" . ($app['applicationStatus_id'] == 3 ? ' selected' : '') . ">Отклонено</option>";
      echo "</select>";
      echo '</div>';
      echo '</div>';
    }
    ?>
  </form>
</body>

</html>