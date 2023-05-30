<?php
include '../config/connect.php';
$about = $_POST['about'];
include '../config/connect.php';
$update = "UPDATE `about` SET,`about`='{$about}'";
$result = mysqli_query($connection, $update);
if($result){
    $_SESSION['success_message'] = 'Updated Successfully';
    header("Location: http://{$hostname}/Client_project/Admin/About/about.php");
}
?>