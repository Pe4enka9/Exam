<?php
session_start();

require_once '../connect.php';

$query = mysqli_query($connect, "SELECT * FROM `Application`");

$apps = mysqli_fetch_all($query, MYSQLI_ASSOC);

$_SESSION['app'] = [];
foreach ($apps as $app) {
    $_SESSION['app'][] = [
        "id" => $app['id'],
        "user_id" => $app['user_id'],
        "govNumber" => $app['govNumber'],
        "description" => $app['description'],
        "applicationStatus_id" => $app['applicationStatus_id']
    ];
}
