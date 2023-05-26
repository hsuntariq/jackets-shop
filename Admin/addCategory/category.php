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
            if(isset($_SESSION['message'])){
                echo "<div style='position:fixed;right:0;top:0;z-index:33' class='bg-success text-light col-8 col-sm-3 p-3 test'>". $_SESSION['message'] . "</div>";
                }
            include '../assets/sidebar.php';
            include '../config/connect.php';
            ?>
        <div class="col-sm-9 form">
            <h1 class="display-3 d-flex justify-content-center font-weight-medium" style="color: #F29221;">
                Add Category
            </h1>
            <form action="./category_section.php" method="POST" class="col-sm-8 m-auto p-3"
                enctype="multipart/form-data">
                <label for="">Product Name</label>
                <input name="name" type="text" class="form-control">
                <label for="">Product Image</label>
                <input name="image" type="file" class="form-control">
                <input name="post-data" type="submit" value="Add Category Photo" class="form-control my-3 btn"
                    style="background-color: #F29221;">
            </form>
             <table class="table table-striped text-capitalize" style="overflow-x:scroll;">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Category name</th>
                            <th scope="col">Image</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include '../config/connect.php';
                            $select = 'SELECT * FROM `category_images`';
                            
                            $result = mysqli_query($connection, $select);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                            <tr>
                                <th scope="row"><?php echo $row['id']?></th>
                                <td>
                                    <?php echo $row['name']?> 
                                </td>
                                <td>
                                    <img width="50px" height="50px" src="../assets/images/<?php echo $row['image']?>" alt="">
                                </td>
                                <td>
                                    
                                    <a href="./delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                                        Delete
                                    </a>
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
                    session_unset();
                    session_destroy()
                ?>
    </body>


</html>