<?php
session_start();

require_once '../connect.php';

$query = mysqli_query($connect, "SELECT * FROM `Application`");

$apps = mysqli_fetch_all($query, MYSQLI_ASSOC);

$_SESSION['app'] = [];
$user_fullName = [];
foreach ($apps as $app) {
    $_SESSION['app'][] = [
        "id" => $app['id'],
        "user_id" => $app['user_id'],
        "govNumber" => $app['govNumber'],
        "description" => $app['description'],
        "applicationStatus_id" => $app['applicationStatus_id']
    ];

    $user_id = $app['user_id'];
    $query_user = mysqli_query($connect, "SELECT `lastName`, `name`, `surname` FROM `User` WHERE `isAdmin` = 0 AND `id` = '$user_id'");
    $query_user = mysqli_fetch_assoc($query_user);
    array_push($user_fullName, $query_user['lastName'] . " " . $query_user['name'] . " " . $query_user['surname']);
}
