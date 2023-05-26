<?php
session_start();
if(isset($_POST['add-to-cart'])){

    $image = $_POST['image'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $info = $_POST['info'];
    $quantity = $_POST['quantity'];
    $_SESSION['cart'][] = array('image' => $image, 'name' => $name, 'price' => $price,'info'=>$info, 'quantity' => $quantity);
    header('Location: http://localhost/Client_project/User/myCart.php');
    $_SESSION['message'] = 'Added To cart!';
}
?>