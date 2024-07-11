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
  <div class="admin">
    <h2></h2>
    <h1>Панель администратора</h1>

    <div class="block">
      <div class="elem num_app">
        <label>№ заявления</label>
        <div></div>
      </div>

      <div class="elem full_name">
        <label>ФИО</label>
        <div></div>
      </div>

      <div class="elem gov_num">
        <label>Гос.номер</label>
        <div></div>
      </div>

      <div class="elem description">
        <label>Описание нарушения</label>
        <textarea readonly name="description"></textarea>
      </div>

      <div class="elem status">
        <label>Статус</label>
        <select name="applicationStatus_id">
          <option value="1">Новое</option>
          <option value="2">Подтверждено</option>
          <option value="3">Отклонено</option>
        </select>
      </div>
    </div>

    <a id="exit" href="../vendor/logout.php">Выйти</a>
  </div>
</body>

</html>