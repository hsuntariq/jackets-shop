<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
            include '../../assets/bootstrap_css.php'
        ?>
        <title>Login</title>
        <style>
            body{
                display:flex;
                justify-content:center;
                align-items:center;
                height:100vh

            }
        </style>
    </head>

    <body>
        <?php
        session_start();
        if(isset($_SESSION['err_message'])){
                echo "<div style='position:fixed;right:0;top:0;z-index:33' class='bg-danger text-light col-8 col-sm-3 p-3 test'>". $_SESSION['err_message'] . "</div>";
                }
    ?>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6">
                    <img width="100%" src="https://img.freepik.com/free-photo/top-view-various-medical-equipment_23-2149283863.jpg" alt="">
                </div>
                <div class="col-lg-6">

                <form action="./login_admin.php" method="POST">
                    <label for="">Username</label>
                <input class="form-control" type="text" name="username" placeholder="Please enter your username">
                <label for="">Password</label>
                <input class="form-control" type="text" name="password" placeholder="Please enter your username">
                <input name="post-data" type="submit" value="Add Product" class="form-control my-3 btn"
                            style="background-color: #F29221;">
            </form>
                </div>
                </div>
        </div>
         <script>
            let test = document.querySelector('.test');
            setTimeout(()=>{
                test.style.transition = 'all 0.7s'
                test.style.transform = 'translateX(100%)'
                
            },1000)
        </script>

    </body>

</html>