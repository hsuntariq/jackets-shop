<?php
include '../../config/connect.php';
if(isset($_FILES['image'])){
    $fileName = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    move_uploaded_file($tmp_name, '../../assets/images/' . $fileName);
}
$name = $_POST['name'];
$price = $_POST['price'];
$info = $_POST['info'];
$category = $_POST['category'];
$s_category = $_POST['s_category'];
$insert = "INSERT INTO product(name, price, info, category,s_category, image) VALUES ('{$name}',{$price},'{$info}','{$category}','{$s_category}','{$fileName}')";
session_start();
mysqli_query($connection, $insert);
$_SESSION['message'] = 'Record inserted Successfully';

header("Location: http://{$hostname}/Client_project/Admin/addProduct/addProduct.php")
?>