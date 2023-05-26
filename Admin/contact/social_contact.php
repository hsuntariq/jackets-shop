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
                    // include '../check/check.php';
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
                        <form action="./updateSocial.php" method="POST" class="border p-3">
                            <label for="">Facebook</label>
                            <input class="form-control" type="text" placeholder="please enter updated facebook"
                                name="facebook">
                            <label for="">Instagram</label>
                            <input class="form-control" type="text" placeholder="please enter updated instagram"
                                name="instagram">
                            <label for="">Twitter</label>
                            <input class="form-control" type="text" placeholder="please enter updated twitter"
                                name="twitter">
                            <label for="">Google</label>
                            <input class="form-control" type="text" placeholder="please enter updated google"
                                name="google">
                            <label for="">Pintrest</label>
                            <input class="form-control" type="text" placeholder="please enter updated pintrest"
                                name="pintrest">
                            <label for="">Linkedin</label>
                            <input class="form-control" type="text" placeholder="please enter updated linkedin"
                                name="linkedin">
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