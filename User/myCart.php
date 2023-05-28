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
        session_start();
        if(isset($_SESSION['success'])){
                echo "<div style='position:fixed;right:0;top:0;z-index:33' class='bg-success text-light col-8 col-sm-3 p-3 test'>". $_SESSION['success'] . "</div>";
            }
              include '../components/nav2.php';
            include '../components/sidebar.php';
            ?>

        </div>
        <div class="container-fluid p-0">
            <h1 class="display-5 text-center text-light p-3" style="background:linear-gradient(to right,#f29221,black)">
                Your Product
            </h1>
        </div>
        <form action="./cart-mail.php" method="POST">

            <div class="row container m-auto ">
                <div class="col-md-6">

                    <div class="col-sm-12">
                        <label for="">Full Name</label>
                        <input required type="text" class="form-control" name="name" placeholder="Full Name">
                    </div>
                    <div class="col-sm-12">
                        <label for="">Email Address</label>
                        <input required type="text" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="col-sm-12">
                        <label for="">Phone</label>
                        <input required type="text" class="form-control" name="phone" placeholder="Phone">
                        <input type="submit" style="background-color: #E29338;" value="Submit"
                            class="my-btn my-3 form-control">
                    </div>
                </div>
                <div class="col-md-6">

                    <table class="table" style="height:50px;overflow-y:scroll">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>image</th>
                                <th>details</th>
                                <th>quantity</th>

                            </tr>
                        </thead>
                        <tbody style="font-weight:800">
                            <?php
                $i=1;
                if (isset($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $key => $row) {
                        ?>
                            <tr>
                                <td><?php echo $key + 1 ?></td>
                                <td> <img width="50px" src="../Admin/assets/images/<?php echo $row['image'] ?>" /></td>
                                <input name="name" type="hidden" value="<?php echo $row['image'] ?>">

                                <td>
                                    Name:<?php echo $row['name'] ?> <br>
                                    <input name="name" type="hidden" value="<?php echo $row['name'] ?>">
                                    Price:<?php echo $row['price'] ?>
                                    <input name="price" type="hidden" value="<?php echo $row['price'] ?>">

                                </td>
                                <td>
                                    Quantity:<?php echo $row['quantity'] ?>
                                    <input name="quantity" type="hidden" value="<?php echo $row['quantity'] ?>">

                                </td>
                            </tr>

                            <?php
                    }
                }else{
                    echo "
                    <div class='display-1 text-center' style='color:#e49234'>Your Cart is Empty</div>
                    ";
                }
                ?>

                        </tbody>
                    </table>

                    <hr>
                </div>
        </form>
        
    </div>
    <form action="./remove-item.php" method="POST" class="text-right">
        <button type="submit" class="btn btn-danger mr-5">
            Delete Cart Items
        </button>
    </form>
        <?php include '../components/footer.php'?>
        <script>
            let nav = document.querySelector('.myNav');
            let cards = document.querySelector('.slider')
            let btn = document.querySelector('.next')
            window.addEventListener('scroll', function () {
                let y = window.scrollY;
                nav.style.trasnition = 'all 0.9s'
                if (y > 1) {
                    nav.style.transition = 'all 0.4s'
                    nav.style.transform = 'translateY(-35px)'
                }
                if (y <= 2) {
                    nav.style.transition = 'all 0.4s'
                    nav.style.transform = 'translateY(0)'
                }
            })

            let test = document.querySelector('.test');
            setTimeout(() => {
                test.style.transition = 'all 0.7s'
                test.style.transform = 'translateX(100%)'

            }, 1000)
        </script>
        <?php
       unset($_SESSION['success']);
        ?>
    </body>

</html>