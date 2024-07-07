<?php
require_once '../connect.php';

$name = $_POST['name'];
$lastName = $_POST['lastName'];
$surname = $_POST['surname'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$login = $_POST['login'];
$pass = $_POST['pass'];

mysqli_query($connect, "INSERT INTO `User` (`id`, `name`, `lastName`, `surname`, `tel`, `email`, `login`, `pass`) 
VALUES (NULL, '$name', '$lastName', '$surname', '$tel', '$email', '$login', '$pass')");

header('Location: ../pages/index.php');
