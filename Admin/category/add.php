<?php
session_start();
        include '../../Admin/config/connect.php';
            $name = $_POST['name'];
            $s_name = $_POST['s_name'];
            if(isset($_FILES['image'])){
                $fileName = $_FILES['image']['name'];
                $tmp_name = $_FILES['image']['tmp_name'];
                move_uploaded_file($tmp_name, '../../assets/images/' . $fileName);
            }
            $insert = "INSERT INTO `category`(`name`, `c_image`) VALUES ('{$name}','{$fileName}')";
            mysqli_query($connection,$insert);
            // $c_id = mysqli_insert_id($connection);
            $insert2 = "INSERT INTO `sub_category`(`name`) VALUES ('{$s_name}')";
            mysqli_query($connection,$insert2);
            $_SESSION['message'] = 'Record inserted Successfully';

        header('Location: http://localhost/Client_project/Admin/category/category.php');
        ?>