<?php
include "../config/connect.php";
$id = $_GET['id'];
$delete = "DELETE FROM category_images WHERE id={$id}";
mysqli_query($connection, $delete);
session_start();

    $SESSION['delete'] = 'Successfully Deleted';
    header("Location: http://localhost/Client_project/Admin/addCategory/category.php");
?>