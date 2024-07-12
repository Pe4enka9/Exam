<?php
require_once '../connect.php';

$name = $_POST['name'];
$lastName = $_POST['lastName'];
$surname = $_POST['surname'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$login = $_POST['login'];
$pass = md5($_POST['pass']);

$check = mysqli_query($connect, "SELECT * FROM `User` WHERE `login` = '$login'");

if (mysqli_num_rows($check) > 0) {
    $_SESSION['loginError'] = 'Пользователь с таким логином уже существует!';
} else {
    mysqli_query($connect, "INSERT INTO `User` (`id`, `name`, `lastName`, `surname`, `tel`, `email`, `login`, `pass`) 
    VALUES (NULL, '$name', '$lastName', '$surname', '$tel', '$email', '$login', '$pass')");
}

header('Location: ../index.php');
