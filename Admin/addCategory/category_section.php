<?php
include '../../Admin/config/connect.php';
if(isset($_FILES['image'])){
    $fileName = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    move_uploaded_file($tmp_name, '../../assets/images/' . $fileName);
}
$name = $_POST['name'];
$insert = "INSERT INTO category_images(name, image) VALUES ('{$name}','{$fileName}')";
session_start();
mysqli_query($connection, $insert);
$_SESSION['message'] = 'Record inserted Successfully';

header('Location: http://localhost/Client_project/Admin/addCategory/category.php')
?>