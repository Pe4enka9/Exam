<?php
session_start();
unset($_SESSION['user']);
unset($_SESSION['app']);

header('Location: ../index.php');
