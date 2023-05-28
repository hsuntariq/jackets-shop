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
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet"
            id="bootstrap-css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <title>Document</title>
        <style>
            label {
                color: #f29221 !important;
            }
        </style>
    </head>

    <body>

        <?php
        include '../components/nav2.php';
            include '../components/sidebar.php';
        ?>
        <div class="container-fluid">
            <h1 class="display-5 text-center text-light p-3" style="background:linear-gradient(to right,#f29221,black)">
                About Us
            </h1>
        </div>
        <div class="container rounded-4 text-justify" style="">
            <div class="row justify-content-center align-items-center">
                <?php
                            include '../Admin/config/connect.php';
                            $select = 'SELECT * FROM about';
                            $result = mysqli_query($connection, $select);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                ?>
                <div class="col-lg-6">
                    <img width="100%" src="../assets/images/<?php echo $row['image']?>" alt="">
                </div>
                <div class="col-lg-6">
                    <h6 class="text-secondary">
                        <h6>
                            <?php echo $row['about'] ?>
                        </h6>
                        <?php
                            }
                        }
                        ?>
                </div>
            </div>
        </div>
        <?php
        include '../components/footer.php';
        ?>

    </body>

</html>