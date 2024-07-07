<?php
session_start();
require_once '../connect.php';

$appID = $_SESSION['user']['id'];

$app = mysqli_query($connect, "SELECT * FROM `Application` WHERE `user_id` = $appID");

$apps = mysqli_fetch_assoc($app);

$_SESSION['app'] = [
    "id" => $apps['id'],
    "govNumber" => $apps['govNumber'],
    "description" => $apps['description'],
    "applicationStatus_id" => $apps['applicationStatus_id']
];
?>

<pre>
    <?php
    print_r($_SESSION['app']);
    ?>
</pre>