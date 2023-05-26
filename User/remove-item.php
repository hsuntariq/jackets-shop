<?php
session_start();
session_destroy();
session_unset();
header('Location: http://localhost/Client_project/User/myCart.php')
?>