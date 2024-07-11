<?php
session_start();

require_once '../connect.php';

$query = mysqli_query($connect, "SELECT * FROM `Application`");

$app = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<pre>
    <?php
    print_r($app);
    ?>
</pre>