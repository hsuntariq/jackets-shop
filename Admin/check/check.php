<?php
if(!isset($_SESSION['username'])){
    session_start();
            header('Location: http://localhost/Client_project/User/HomeView.php');
            }
?>