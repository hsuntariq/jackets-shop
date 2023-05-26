<?php
include '../config/connect.php';
if(isset($_FILES['image'])){
    $fileName = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    move_uploaded_file($tmp_name, '../assets/images/' . $fileName);
}
$insert = "INSERT INTO `slider`(`image`) VALUES ('{$fileName}')";
session_start();
mysqli_query($connection, $insert);
$_SESSION['message'] = 'Record inserted Successfully';

header('Location: http://localhost/Client_project/Admin/slider/slider_images.php');
?>