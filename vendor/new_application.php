<?php
session_start();
require_once '../connect.php';

$user_id = $_SESSION['user']['id'];
$govNumber = $_POST['govNumber'];
$description = $_POST['description'];

$query = mysqli_query($connect, "INSERT INTO `Application` (`id`, `user_id`, `govNumber`, `description`, `applicationStatus_id`)
VALUES (NULL, '$user_id', '$govNumber', '$description', '1')");

if ($query) {
    $_SESSION['confirm'] = 'Заявление успешно добавлено!';
} else {
    $_SESSION['confirm'] = 'Не удалось добавить заявление';
}

header('Location: ../pages/newapp.php');
