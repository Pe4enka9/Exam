<?php
session_start();

require_once '../vendor/output.php';

if (!$_SESSION['user']) {
  header('Location: ../index.php');
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
  <link rel="stylesheet" href="../css/app.css">
  <title>Заявления</title>
</head>

<body>
  <div class="app">
    <h2><?= $_SESSION['user']['lastName'] . " " . $_SESSION['user']['name'] . " " . $_SESSION['user']['surname'] ?></h2>

    <div class="buttons">
      <a id="new" href="newapp.php">Написать новое заявление</a>
      <h1>Заявления</h1>
      <a id="exit" href="../vendor/logout.php">Выйти</a>
    </div>

    <div class="block">
      <div class="elem num_app">
        <label>№ заявления</label>
        <?php
        foreach ($_SESSION['app'] as $app) {
          echo "<div>{$app['id']}</div>";
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
          echo "<div name=\"description\">{$app['description']}</div>";
        }
        ?>
      </div>

      <div class="elem status">
        <label>Статус</label>
        <?php
        foreach ($_SESSION['app'] as $app) {
          if ($app['applicationStatus_id'] == 1) {
            echo "<div>Новое</div>";
          } else if ($app['applicationStatus_id'] == 2) {
            echo "<div>Подтверждено</div>";
          } else {
            echo "<div>Отклонено</div>";
          }
        }
        ?>
      </div>
    </div>
  </div>
</body>

</html>