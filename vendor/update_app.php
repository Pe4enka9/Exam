<?php
session_start();
require_once '../connect.php';

$id = $_POST['id'];
$status = $_POST['applicationStatus_id'];
$selectAll = mysqli_query($connect, "SELECT * FROM `Application`");

for ($i = 0; $i < mysqli_num_rows($selectAll); $i++) {
    $query = mysqli_query($connect, "UPDATE `Application` SET `applicationStatus_id` = '$status[$i]' WHERE `id` = '$id[$i]'");
}

if ($query) {
    $_SESSION['success'] = "<span id=\"success\">Успешно изменено!</span>";
}

header('Location: ../pages/admin.php');
