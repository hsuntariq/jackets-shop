<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- <?php
        include '../assets/bootstrap_css.php'
    ?> -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <!-- <link rel="stylesheet" href="../styles/stylec.css"> -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <link rel="stylesheet" href="./styles.css">
        <title>Document</title>
        <style>
            a {
                color: black !important;
                font-weight: 700;
                text-decoration: none;
            }

            .d-flex {
                margin-bottom: 1rem;
                transition: all 0.3s;
                padding: 1rem;

            }

            .d-flex:hover {
                background-color: #b86506;
            }
        </style>
    </head>

    <body>

        <?php

            // include '../check/check.php';
            session_start();
            if(isset($_SESSION['success'])){
                echo "<div style='position:fixed;right:0;top:0;z-index:33' class='bg-success text-light col-8 col-sm-3 p-3 test'>". $_SESSION['success'] . "</div>";
                }
                include '../assets/sidebar.php';
            include '../config/connect.php';
                
            ?>
        <div class="col-sm-9">
            <h1 class="display-3 d-flex justify-content-center font-weight-medium" style="color: #F29221;">
                Add Catalogue Image
            </h1>
            <div class="col-lg-8 m-auto">
                <form action="./update.php" class="border p-3" enctype="multipart/form-data" method="POST">
                    <label for="">Update Username</label>
                    <input required placeholder="Updated Username..." class="form-control" type="text" name="username" id="">
                    <label for="">Update Password</label>
                    <input required placeholder="Updated password..." class="form-control" type="password" name="password" id="">
                    <input name="update_data" type="submit" value="Update Credentials" class="form-control my-3 btn"
                        style="background-color: #F29221;">
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script>
            let test = document.querySelector('.test');
            setTimeout(() => {
                test.style.transition = 'all 0.7s'
                test.style.transform = 'translateX(100%)'

            }, 1000)
        </script>
        <?php
                    // session_start();
                    
                ?>
    </body>