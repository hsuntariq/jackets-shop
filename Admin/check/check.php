<?php
        if(isset($_SESSION['username'])){
            if(isset($_SESSION['success_message'])){

                echo "<div style='position:fixed;right:0;top:0;z-index:33' class='bg-success text-light col-8 col-sm-3 p-3 test'>". $_SESSION['success_message'] . "</div>";
            }
            }else{
            header("Location: http://{$hostname}/Client_project/User/HomeView.php");

            }
?>