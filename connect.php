<?php
$connect = mysqli_connect('localhost', 'root', '', 'exam');

if (!$connect) {
    die('Ошибка подключения к БД!');
}
