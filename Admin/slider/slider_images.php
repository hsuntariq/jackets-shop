<!DOCTYPE html>
<html lang="en">

    <head>
        <?php
            include '../assets/boilerPlate.php'
        ?>
        <title>Document</title>
        <style>
            tbody tr:nth-child(odd) {
                background: #F29221 !important;
            }
        </style>
    </head>
    
    <body>
        <?php
        session_start();
            include '../assets/sidebar.php';
            if(isset($_SESSION['message'])){
                echo "<div style='position:fixed;right:0;top:0;z-index:33' class='bg-success text-light col-8 col-sm-3 p-3 test'>". $_SESSION['message'] . "</div>";
                }
            if(isset($_SESSION['delete'])){
                echo "<div style='position:fixed;right:0;top:0;z-index:33' class='bg-success text-light col-8 col-sm-3 p-3 test'>". $_SESSION['message'] . "</div>";
                }
            if(isset($_SESSION['err'])){
                echo "<div style='position:fixed;right:0;top:0;z-index:33' class='bg-danger text-light col-8 col-sm-3 p-3 test'>". $_SESSION['err'] . "</div>";
                }
        ?>
        <div class="col-sm-9">
            <h1 class="display-3 d-flex justify-content-center font-weight-medium" style="color: #F29221;">
                Add Slider Image
            </h1>
            <div class="col-lg-8 m-auto">
                <form action="./add_image.php" class="border p-3" enctype="multipart/form-data" method="POST">
                    <input class="form-control" type="file" name="image" id="">
                    <input name="update_data" type="submit" value="Add Slider Image" class="form-control my-3 btn"
                        style="background-color: #F29221;">
                </form>
                <h1 class="display-5 d-flex justify-content-center font-weight-medium" style="color: #F29221;">
                Your Slider Images
                </h1>
                <table class="table table-striped" style="overflow-x:scroll;">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Image</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include '../config/connect.php';
                            $select = 'SELECT * FROM `slider`';
                            
                            $result = mysqli_query($connection, $select);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                            <tr>
                                <th scope="row"><?php echo $row['id']?></th>
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
    </body>
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

</html>