<?php
include '../config/connect.php';
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$footer = $_POST['footer'];
$o_hour = $_POST['o_hour'];
$c_close = $_POST['c_close'];

$insert = "UPDATE `contact` SET `email`='{$email}',`phone`='{$phone}',`address`='{$address}',`footer_text`='{$footer}',`o_hour`='{$o_hour}',`c_close`='{$c_close}'";
$result = mysqli_query($connection,$insert);
if($result){
    session_start();
    $_SESSION['success'] = 'Contacts successfully updated';
    header('Location: http://localhost/Client_project/Admin/contact/contact.php');
} else {
    session_start();
    $_SESSION['err'] = 'An Error Occured';
    header('Location: http://localhost/Client_project/Admin/contact/contact.php');
}
?>