<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../css/newapp.css" />
  <title>Формирование заявления</title>
</head>

<body>
  <form action="" method="post" class="newapp">
    <h1>Формирование заявления</h1>

    <div class="inp">
      <div class="inp_block govNumber_block">
        <label for="govNumber">Гос.номер:</label>
        <input type="text" name="govNumber" id="govNumber" />
      </div>

      <div class="inp_block description_block">
        <label for="description">Описание нарушения:</label>
        <textarea name="description" id="description"></textarea>
      </div>
    </div>

    <div class="buttons">
      <a id="new" href="#">Сформировать новое заявление</a>
      <a id="exit" href="app.php">Назад</a>
    </div>
  </form>
</body>

</html>