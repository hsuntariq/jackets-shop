<!DOCTYPE html>
<html lang="en">

    <head>
        <?php 
        include '../assets/boilerPlate.php'
        ?>
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

            tbody tr:nth-child(odd) {
                background: #F29221 !important;
            }
        </style>
    </head>

    <body>
        <div class="container-fluid">
            <div class="row" style="height:100vh">
                <?php
                session_start();
                include '../check/check.php';
                include '../assets/sidebar.php';
                if(isset($_SESSION['delete'])){
                echo "<div style='position:fixed;right:0;top:0;z-index:33' class='bg-success text-light col-8 col-sm-3 p-3 test'>". $_SESSION['delete'] . "</div>";
                }
                ?>
                <div class="col-sm-9">
                    <h1 class="display-3 d-flex justify-content-center font-weight-medium" style="color: #F29221;">
                        Your Products
                    </h1>

                    <table class="table table-striped" style="overflow-x:scroll;">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">info</th>
                                <th scope="col">category</th>
                                <th scope="col">SubCategory</th>
                                <th scope="col">Image</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            include '../config/connect.php';
                            $select = 'SELECT * FROM `product`';
                            
                            $result = mysqli_query($connection, $select);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                            <tr>
                                <th scope="row"><?php echo $row['id']?></th>
                                <td><?php echo $row['name']?></td>
                                <td>Rs.<?php echo $row['price']?></td>
                                <td><?php echo $row['info']?></td>
                                <td><?php echo $row['category']?></td>
                                <td><?php echo $row['s_category']?></td>
                                <td>
                                    <img width="50px" height="50px" src="../assets/images/<?php echo $row['image']?>"
                                        alt="">
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
        if(isset($_SESSION['success_message'])){
            unset($_SESSION['success_message']);
        }
        ?>
    </body>


</html>