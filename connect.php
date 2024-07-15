<?php
$connect = mysqli_connect('MySQL-8.2', 'root', '', 'exam');

if (!$connect) {
    die('Ошибка подключения к БД!');
}
