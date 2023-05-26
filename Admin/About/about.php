<!DOCTYPE html>
<html lang="en">

    <head>
        <?php
        include '../assets/boilerPlate.php';
        ?>
        <title>Change About</title>

    </head>

    <body>
        <?php
                include '../assets/sidebar.php';
                    if(isset($_SESSION['message'])){
                        echo "<div style='position:fixed;right:0;top:0;z-index:33' class='bg-success text-light col-8 col-sm-3 p-3 test'>". $_SESSION['message'] . "</div>";
                }
                ?>
        <div class="col-sm-9">
            <h1 class="display-3 d-flex justify-content-center font-weight-medium" style="color: #F29221;">
                Change About Section
            </h1>
            <div class="col-lg-8 m-auto">
                <form action="./updateAbout.php">
                    <label for="">
                        About me Section
                    </label>
                    <textarea class="form-control" name="about" id="" cols="30" rows="10"></textarea>
                    <button type="submit" class="my-3 btn form-control" style="background-color: #F29221;">
                        Change About
                    </button>
                </form>
            </div>
        </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                crossorigin="anonymous">
            </script>

    </body>


</html>