<?php
session_start();
session_unset();
session_destroy();
header('Location: http://localhost/Client_project/User/HomeView.php');

?>