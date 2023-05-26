<?php

include_once '../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$name = $_POST['name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'hsuntariq@gmail.com';
$mail->Password = 'ptopxvtnnclzkxlk';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setFrom($email);
$mail->addAddress('hsuntariq@gmail.com');
$mail->isHTML(true);
$myMessage = "<div>
    <h4>Name:$name</h4>
    <h5>Sent by $email</h5>
    <h5>price:$price</h5>
    <h5>product name:$name</h5>
    <h5>product quantity:$quantity</h5>
</div>";
$mail->Body = $myMessage;
$mail->send();
header("Location: http://localhost/Client_project/User/myCart.php");
session_start();
$_SESSION['success'] = 'Message Successfully Sent';
?>