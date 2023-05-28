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
            .logo {

                font-family: 'Dancing Script' !important;
            }
        </style>
    </head>

    <body>
        <?php
    session_start();
  include '../components/nav2.php';
            include '../components/sidebar.php';        ?>


        </div>
        <?php
        $name = $_GET['name'];
        $id = $_GET['id'];
        include '../Admin/config/connect.php';
        $select = "SELECT * FROM product JOIN category ON product.category = category.name WHERE category.name = '{$name}' AND category.id = $id";
        $result = mysqli_query($connection, $select);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
        <div class="container-fluid p-0">
            <h1 class="display-5 text-center text-light p-3" style="background:linear-gradient(to right,#f29221,black)">
                Your Product
            </h1>
        </div>
        <div class="container">
            <form action="./add-to-cart.php" method="POST" enctype="multipart/form-data">
                <div class="row">

                    <div class="col-lg-6 border p-4">
                        <img class="d-flex m-auto" width="300px" height="300px"
                            src="../Admin/assets/images/<?php echo $row['c_image']?>" alt="">
                    </div>
                    <input name="c_image" type="hidden" style value="<?php echo $row['image']?>" />

                    <div class="col-lg-6">
                        <h2 style="font-weight:800">
                            Product name:<span style="color:#e49234;">
                                <?php echo $row['name']?>
                            </span>
                        </h2>
                        <input name="name" type="hidden" style value="<?php echo $row['name']?>" />
                        <h2 style="font-weight:800">
                            Product Price:<span style="color:#e49234;">
                                Rs.<?php echo $row['price']?>
                            </span>
                        </h2>
                        <input name="price" type="hidden" style value="<?php echo $row['price']?>" />

                        <hr>
                        <h5 style="font-weight:800">Details:</h5>
                        <p class=text-secondary></p>
                        <?php echo $row['info']?>
                        <input name="info" type="hidden" style value="<?php echo $row['info']?>" />
                        </p>
                        <h5 style="font-weight:800">Quantity</h5>
                        <div class="d-flex" style="gap:1rem">
                            <button class="btn btn-danger">-</button>
                            <input class="quantity text-right d-flex justify-content-center align-items-center"
                                style="width:10%" type="number" name="quantity" value="1" />
                            <button class="btn btn-success">+</button>
                        </div>
                        <input type="submit" name="add-to-cart" class="btn my-3 text-light col-sm-4"
                            style="background:#e49234" />

                    </div>
            </form>
        </div>
        </div>

        <?php
            }
        }
        include '../components/footer.php';
                ?>
        <?php
        unset($_SESSION['success']);
        ?>
    </body>
    <script>
        let btnDanger = document.querySelector('.btn-danger');
        let btnSuccess = document.querySelector('.btn-success');
        let quantity = document.querySelector('.quantity');
        let count = 1
        btnDanger.addEventListener('click', (e) => {
            e.preventDefault()
            quantity.value = count--;
            if (count < 1) {
                count = 1
            }
        })
        btnSuccess.addEventListener('click', (e) => {
            e.preventDefault()
            quantity.value = count++;
        })
    </script>

</html>