<?php
session_start();
require_once '../connect.php';

$login = $_POST['login'];
$pass = md5($_POST['pass']);

$check_user = mysqli_query($connect, "SELECT * FROM `User` WHERE BINARY `login` = '$login' AND BINARY `pass` = '$pass'");

if (mysqli_num_rows($check_user) > 0) {
    $user = mysqli_fetch_assoc($check_user);

    $_SESSION['user'] = [
        "id" => $user['id'],
        "name" => $user['name'],
        "lastName" => $user['lastName'],
        "surname" => $user['surname'],
    ];

    header('Location: ../pages/app.php');
} else {
    $_SESSION['error'] = 'Неверный логин или пароль';

    header('Location: ../index.php');
}
