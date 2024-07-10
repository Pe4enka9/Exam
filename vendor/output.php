<?php
session_start();
require_once '../connect.php';

$userID = $_SESSION['user']['id'];

$app = mysqli_query($connect, "SELECT * FROM `Application` WHERE `user_id` = $userID");

$apps = mysqli_fetch_all($app, MYSQLI_ASSOC);

$_SESSION['app'] = [];
foreach ($apps as $app) {
    $_SESSION['app'][] = [
        "id" => $app['id'],
        "govNumber" => $app['govNumber'],
        "description" => $app['description'],
        "applicationStatus_id" => $app['applicationStatus_id']
    ];
}
