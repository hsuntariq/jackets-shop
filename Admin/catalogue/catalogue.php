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
                    <label for="">Description</label>
                    <input required placeholder="Catalogue Description" class="form-control" type="text" name="description" id="">
                    <input required class="form-control my-2" type="file" name="image1" id="">
                    <input required class="form-control" type="file" name="image2" id="">
                    <input name="update_data" type="submit" value="Update Catalogue Image" class="form-control my-3 btn"
                        style="background-color: #F29221;">
                </form>
                <h1 class="display-5 d-flex justify-content-center font-weight-medium" style="color: #F29221;">
                Your Catalogue Images
                </h1>
                <table class="table table-striped" style="overflow-x:scroll;">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Image1</th>
                            <th scope="col">Image2</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include '../config/connect.php';
                            $select = 'SELECT * FROM `catalogue`';
                            
                            $result = mysqli_query($connection, $select);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                            <tr>
                                <th scope="row"><?php echo $row['id']?></th>
                                <td>
                                    <img width="50px" height="50px" src="../assets/images/<?php echo $row['image1']?>" alt="">
                                </td>
                                <td>
                                    <img width="50px" height="50px" src="../assets/images/<?php echo $row['image2']?>" alt="">
                                </td>

                            </tr>
                            <?php
                                }
                            }
                    ?>
                    </tbody>
                </table>
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