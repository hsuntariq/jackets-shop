<?php
include '../config/connect.php';
$username = $_POST['username'];
$password = $_POST['password'];
$check = "SELECT * FROM admin WHERE username = '{$username}' AND password = '{$password}'";
$result = mysqli_query($connection, $check);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        session_start();
        $_SESSION['username'] = $row['username'];
        $_SESSION['success_message'] = '';
        header('Location: http://localhost/Client_project/Admin/addProduct/addProduct.php');
    }
    }else{
        session_start();
        $_SESSION['err_message'] = 'Invalid Credentials';
        header('Location: http://localhost/Client_project/Admin/login/login.php');
}

?>