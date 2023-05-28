<?php
include '../config/connect.php';
$image1 = $_FILES['image1']['name'];
$image1_tmp_name = $_FILES['image1']['tmp_name'];
$image2 = $_FILES['image2']['name'];
$image2_tmp_name = $_FILES['image2']['tmp_name'];
$description = $_POST['description'];
move_uploaded_file($tmp_name, '../assets/images/' . $image1);
move_uploaded_file($tmp_name, '../assets/images/' . $image2);
$update = "UPDATE `catalogue` SET `catalogue_description`='{$description}',`image1`='{$image1}',`image2`='{$image2}' WHERE id=1";
mysqli_query($connection,$update);
session_start();
$_SESSION['success'] = "Successfully updated";
$pageURL = $_SERVER['HTTP_REFERER'];
header("Location: $pageURL");
?>