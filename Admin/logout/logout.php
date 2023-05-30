<?php
include '../config/connect.php';
session_start();
session_unset();
session_destroy();
header("Location: http://{$hostname}/Client_project/User/HomeView.php");

?>


