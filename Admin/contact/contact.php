<!DOCTYPE html>
<html lang="en">

    <head>
        <?php
        include '../assets/boilerPlate.php';
        ?>
        <title>Document</title>

    </head>

    <body>
        <div class="container-fluid">
            <div class="row" style="height:100vh">
                <?php
                    session_start();
                    include '../assets/sidebar.php';
                    if(isset($_SESSION['success'])){
                echo "<div style='position:fixed;right:0;top:0;z-index:33' class='bg-success text-light col-8 col-sm-3 p-3 test'>". $_SESSION['success'] . "</div>";
                }
if(isset($_SESSION['err'])){
                echo "<div style='position:fixed;right:0;top:0;z-index:33' class='bg-danger text-light col-8 col-sm-3 p-3 test'>". $_SESSION['err'] . "</div>";
                }
                
                ?>
                <div class="col-sm-9">
                    <h1 class="display-3 d-flex justify-content-center font-weight-medium" style="color: #F29221;">
                        Updata Contact Data
                    </h1>
                    <div class="col-lg-8 m-auto">
                        <form action="./updateContact.php" method="POST" class="border p-3">
                            <label for="">Update Email</label>
                            <input class="form-control" type="email" placeholder="please enter updated email"
                                name="email">
                            <label for="">Update Phone</label>
                            <input class="form-control" type="test" placeholder="please enter updated phone"
                                name="phone">
                            <label for="">Update Address</label>
                            <input class="form-control" type="test" placeholder="please enter updated Address"
                                name="address">
                            <label for="">Update Office Hours</label>
                            <input class="form-control" type="time" placeholder="please enter updated opening time"
                                name="o_hour">
                            <label for="">Update Closing Hours</label>
                            <input class="form-control" type="time" placeholder="please enter updated closing hours"
                                name="c_close">
                            <input name="update_data" type="submit" value="Update Data" class="form-control my-3 btn"
                                style="background-color: #F29221;">
                        </form>
                    </div>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                    crossorigin="anonymous">
                </script>
                <script>
                    let test = document.querySelector('.test');
                    setTimeout(() => {
                        test.style.transition = 'all 0.7s'
                        test.style.transform = 'translateX(100%)'

                    }, 1000)
                </script>
    </body>


</html>