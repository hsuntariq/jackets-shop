<?php

include_once '../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$email = $_POST['email'];

$message = $_POST['message'];
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
    <p>
        Subject: New User Sign-Up for Newsletter <br>

<h1>Dear Admin</h1>, <br>

I hope this email finds you well. I wanted to inform you that a new user has signed up for the newsletter on our website. Below are the details of the user:<br>

Email: $email <br>

$email user has expressed interest in receiving updates, news, and promotions from our organization. It's a great opportunity to engage with them and keep them informed about our latest offerings.

Please take the necessary steps to ensure that this user is added to our newsletter mailing list. They are looking forward to receiving our newsletters and being part of our community. <br>

If you have any questions or need further information, please feel free to reach out to me. Thank you for your attention to this matter. <br>

Best regards
    </p>
</div>";
$mail->Body = $myMessage;
$mail->send();
session_start();
$pageURL = $_SERVER['HTTP_REFERER'];
header("Location: $pageURL");
$_SESSION['success'] = 'Message Successfully Sent';
?>