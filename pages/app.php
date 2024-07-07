<?php
session_start();

if (!$_SESSION['user']) {
  header('Location: index.php');
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
    <h1>Заявления</h1>

    <div class="block">
      <div class="elem num_app">
        <label>№ заявления</label>
        <input type="number" name="id" />
      </div>

      <div class="elem gov_num">
        <label>Гос.номер</label>
        <input type="text" name="govNumber" />
      </div>

      <div class="elem description">
        <label>Описание нарушения</label>
        <textarea name="description"></textarea>
      </div>

      <div class="elem status">
        <label>Статус</label>
        <input type="text" name="applicationStatus_id" />
      </div>
    </div>

    <div class="buttons">
      <a id="new" href="newapp.php">Написать новое заявление</a>
      <a id="exit" href="../vendor/logout.php">Выйти</a>
    </div>
  </div>
</body>

</html>