<?php
session_start();

if (!isset($_SESSION['user'])) {
  header('Location: ../index.php');
}

require_once '../vendor/output.php';
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

    <div class="title">
      <label id="title_num">№ заявления</label>
      <label id="title_govNumber">Гос.номер</label>
      <label id="title_description">Описание нарушения</label>
      <label id="title_status">Статус</label>
    </div>

    <?php
    foreach ($_SESSION['app'] as $app) {
      echo "<div class=\"block\">";
      echo "<div class=\"elem num_app\">";
      echo "<div>{$app['id']}</div>";
      echo "</div>";

      echo "<div class=\"elem gov_num\">";
      echo "<div>{$app['govNumber']}</div>";
      echo "</div>";

      echo "<div class=\"elem description\">";
      echo "<div>{$app['description']}</div>";
      echo "</div>";

      echo "<div class=\"elem status\">";
      if ($app['applicationStatus_id'] == 1) {
        echo "<div>Новое</div>";
      } else if ($app['applicationStatus_id'] == 2) {
        echo "<div>Подтверждено</div>";
      } else {
        echo "<div>Отклонено</div>";
      }
      echo "</div>";
      echo "</div>";
    }
    ?>
  </div>

  <script src="../js/app.js"></script>
</body>

</html>