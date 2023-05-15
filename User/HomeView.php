<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php
        include '../assets/bootstrap_css.php'
    ?>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="stylesheet" href="../styles/stylec.css">
        <title>Document</title>
    </head>

    <body>
        <header class="d-flex justify-content-between align-items-center" style="gap:2rem;background-color: white;">
            <div class="logo">
                <img width="80px" src="../assets/images/logo.jpg" alt="">
            </div>
            <div class="items d-flex">
                <h6> <span class="font-weight-bolder">Email</span>info@impetus.pk</h6>
                <h6> <span class="font-weight-bolder">Phone</span>+92-324-546436</h6>
            </div>
        </header>
        <?php
        include '../components/nav.php';
        ?>
        <div class="landing-page" width="100vw">
            <!-- <img width="100%" src="http://impetus.pk/pictures/banner/impetus-motorbike-clothing.jpeg" alt=""> -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img style="object-fit:cover" height="300px" width="100%" class="d-block w-100"
                            src="http://impetus.pk/pictures/banner/impetus-motorbike-clothing.jpeg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img style="object-fit:cover" height="300px" width="100%" class="d-block w-100"
                            src="http://impetus.pk/pictures/banner/34_banner.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img style="object-fit:cover" height="300px" width="100%" class="d-block w-100"
                            src="http://impetus.pk/pictures/banner/33_banner.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <section class="category-page">
            <div class="category-title">
                <h3 class="text-center">
                    CATEGORY <br>
                    <span class="range">RANGE</span>
                </h3>
                <hr class='underline m-auto'>
                <p class="text-secondary text-center col-lg-9 m-auto">
                    The Manufacturer of Motorbike Clothing all types, the complete assortment of leather protections for
                    Bikers. Live our experience in the field of
                    following categories of Motorbike Clothings
                </p>
            </div>
            <div class="category-items container-fluid">
                <div class="row mt-2">
                    <div class="col-lg-3 pic" style="position:relative">
                        <img width="100%" src="http://impetus.pk/pictures/categories/1_pic_1.jpg" alt="">
                        <div class="overlay text-uppercase text-center">
                            <h1>vintage leather jacket</h1>
                        </div>
                    </div>
                    <div class="col-lg-3 pic" style="position:relative">
                        <img width="100%" src="http://impetus.pk/pictures/categories/1_pic_1.jpg" alt="">
                        <div class="overlay text-uppercase text-center">
                            <h1>vintage leather jacket</h1>
                        </div>
                    </div>
                    <div class="col-lg-3 pic" style="position:relative">
                        <img width="100%" src="http://impetus.pk/pictures/categories/1_pic_1.jpg" alt="">
                        <div class="overlay text-uppercase text-center">
                            <h1>vintage leather jacket</h1>
                        </div>
                    </div>
                    <div class="col-lg-3 pic" style="position:relative">
                        <img width="100%" src="http://impetus.pk/pictures/categories/1_pic_1.jpg" alt="">
                        <div class="overlay text-uppercase text-center">
                            <h1>vintage leather jacket</h1>
                        </div>
                    </div>
                    <div class="col-lg-3 pic" style="position:relative">
                        <img width="100%" src="http://impetus.pk/pictures/categories/1_pic_1.jpg" alt="">
                        <div class="overlay text-uppercase text-center">
                            <h1>vintage leather jacket</h1>
                        </div>
                    </div>
                    <div class="col-lg-3 pic" style="position:relative">
                        <img width="100%" src="http://impetus.pk/pictures/categories/1_pic_1.jpg" alt="">
                        <div class="overlay text-uppercase text-center">
                            <h1>vintage leather jacket</h1>
                        </div>
                    </div>
                </div>
            </div>
            <nav aria-label="Page navigation example" style="background-color: #fff;">
                <ul class="pagination d-flex justify-content-center pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </section>
        <section class="catalogue bg-light" style="width:100vw">
            <div class="row col-lg-8 m-auto justify-content-center">
                <div class="col-md-6">
                    <img width="100%" height="100%" src="https://static.vecteezy.com/system/resources/previews/008/671/797/original/rider-front-view-on-yellow-background-vector.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <img width="100%" height="100%" src="../assets/images/jacket-removebg-preview.png" alt="">
                </div>
            </div>
        </section>
        <div class="catalogue-into">
            <h1 class="text-right">CATALOGUE</h1>
            <p class="text-secondary text-justify col-lg-5 ml-auto">
                A library catalog or library catalogue
                is a register of all bibliographic items
                found in a library or group of libraries,
                such as a network of libraries at several
                locations.
            </p>
        </div>
        <div class="feature-product">
            <h3 class="text-center text-uppercase">
                feature <br>
                <span class="range">product</span>
            </h3>
            <hr class='underline m-auto'>
            <p class="text-secondary text-center mt-2">
                Every day more people discover our wide range of Motorbike Clothing.
            </p>
        </div>

        <footer class="p-3">
            <div class="row">
                <div class="col-md-8 p-3">
                    <h2>SIGN UP TO OUR NEWSLETTER</h2>
                    <p>Product launches, expedition updates, event news.</p>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control" name="signup" placeholder="Your Email...">
                            <span class="my-btn">
                                <button class="btn btn-default" type="submit" value="send" name="submit">submit</button>
                            </span>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-4">
                            <img width="100%" src="../assets/images/logo-removebg-preview.png" alt="">
                        </div>
                        <div class="col-8">
                            <p>
                                This company registered in 1993 and start operational working in 1995. It�s family based
                                company as tradition here in Pakistan. From First day, we concentrate on motorbike
                                industry as we understand that there�s still potential in this industry and we can get
                                our part.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-3">
                    <h3>Follow us</h3>
                    <p>You can select any social link</p>
                    <div class="row icons">
                        <div class="col-2"><i class="bi bi-facebook"></i></div>
                        <div class="col-2"><i class="bi bi-twitter"></i></div>
                        <div class="col-2"><i class="bi bi-google"></i></div>
                        <div class="col-2"><i class="bi bi-instagram"></i></div>
                        <div class="col-2"><i class="bi bi-pinterest"></i></div>
                        <div class="col-2"><i class="bi bi-linkedin"></i></div>
                    </div>
                    <h3>contact us</h3>
                    <h6>address</h6>
                    <p class="text-secondary">Impetus,Gunah kalan, Pasror Road Sialkot – Pakistan</p>
                    <h6>phone</h6>
                    <p class="text-secondary">+92-523 549592</p>
                    <h6>Fax:<span class="text-secondary">+92-523 549592</span></h6>
                    <h6>web:<span class="text-secondary">www.impetus.pk</span></h6>
                    <h6>email:<span class="text-secondary">info@maail.com</span></h6>
                </div>
            </div>
        </footer>



        <?php 
        include '../assets/bootstrap_js.php'
    ?>
    </body>

</html>