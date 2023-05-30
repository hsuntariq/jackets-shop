<?php
session_start();
include_once '../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$email = $_POST['email'];
$phone = $_POST['phone'];
echo "<br>";
$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'hsuntariq@gmail.com';
$mail->Password = 'swyljhzcznpqkrab';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setFrom($email);
$mail->addAddress('hsuntariq@gmail.com');
$mail->isHTML(true);

$cart = $_SESSION['cart'];
$cartItems = '';
$totalPrice = 0;

foreach ($cart as $item) {
    $name = $item['name'];
    $price = $item['price'];
    $quantity = $item['quantity'];
    $image = $item['image'];

    $imagePath = $_SERVER['DOCUMENT_ROOT'] . '/Client_project/Admin/assets/images/' . $image; // Change 'images' to your actual image directory

    // Embed the image as an attachment
    $mail->addAttachment($imagePath, 'product_image');

    // Generate a unique Content ID for the image
    $contentId = 'product_image_' . uniqid();

    $cartItems .= "
        <tr>
            <td><strong>Product Name:</strong></td>
            <td>$name</td>
        </tr>
        <tr>
            <td><strong>Product Price:</strong></td>
            <td>Rs.$price</td>
        </tr>
        <tr>
            <td><strong>Product Quantity:</strong></td>
            <td>Rs.$quantity</td>
        </tr>
        <tr>
            <td><img width='50px' src='cid:$contentId'></td>
        </tr>
        <br>
    ";

    $totalPrice += $price * $quantity;
}

$myMessage = "
    <div>
        <h2>New Product Purchase</h2>
        <p>A user has made a purchase on your website:</p>
        <table>
            <tr>
                <td><strong>User Email:</strong></td>
                <td>$email</td>
            </tr>
            <tr>
                <td><strong>User Phone:</strong></td>
                <td>$phone</td>
            </tr>
            $cartItems
            <tr>
                <td><strong>Total Price:</strong></td>
                <td>Rs.$totalPrice</td>
            </tr>
        </table>
        <p>Please take appropriate action to process the order.</p>
        <p>Thank you!</p>
        <p>Your Website Team</p>
    </div>";

$mail->Body = $myMessage;
$mail->send();
header("Location: http://{$hostname}/Client_project/User/myCart.php");
$_SESSION['success'] = 'Message Successfully Sent';
exit();
?>
