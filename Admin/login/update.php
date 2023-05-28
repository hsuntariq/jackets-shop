<?php
    include '../config/connect.php';
$username = $_POST['username'];
$password = $_POST['password'];
$update = "UPDATE admin SET username='{$username}', password='{$password}";
mysqli_query($connection, $update);
session_start();
$pageURL = $_SERVER['HTTP_REFERER'];
$_SESSION['success'] = 'successfully update!';
header("Location: $pageURL");
?>