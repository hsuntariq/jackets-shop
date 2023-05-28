<header style="background-color: black!important;">
    <p class=" m-0 text-center p-2 text-right d-flex justify-content-end"> info@shengg.pk /
        +92-511-22338</p>
</header>
<nav class="myNav navbar navbar-expand-lg d-flex justify-content-around"
    style="width:80%;z-index:222;background-color:rgb(235, 235, 235);margin:auto;border-radius:60px">
    <div style="position:relative;" class="navbar-brand p-0 d-flex justify-content-center align-items-center">
        <div class="image">
            <img width="50px" src="../assets/images/logo-removebg-preview.png" style="transform: scale(1.2);" alt="">
        </div>
        <div class="text-brand" style="position:absolute; left:100%;top:-40%">
            <h3 style="font-weight:800">
                <span class="d-flex align-self-center" style="color:#e29338">Sheeny</span>
                <span class="d-flex align-self-center" style="color:#0c1e36;font-size:1.5rem"> International</span>
            </h3>
        </div>
    </div>
    <ul class="m-auto my-list" style="list-style:none">
        <li class="nav-items">
            <a style="font-weight: 600;" href="../User/HomeView.php" class="nav-link active">Home</a>
        </li>
        <li class="nav-items">
            <a style="font-weight: 600;" href="../User/AboutUs.php" class="nav-link">About Us</a>
        </li>
        <li class="nav-items">
            <a style="font-weight: 600;" href="../User/products.php" class="nav-link">Our Products</a> </li>
        <li class="nav-items">
            <a style="font-weight: 600;" href="../User/catalogue.php" class="nav-link">Catalogue</a>
        </li>
        <li class="nav-items">
            <a style="font-weight: 600;" href="../User/ContactUs.php" class="nav-link">Contact us</a>
        </li>
        <li class="nav-items " style="clip-path:circle();position:relative">
            <a style="font-weight: 800;z-index:22222;background-color:#E49234;color:black;font-size:1.8rem"
                href="../User/myCart.php" class="nav-link"><i class="bi bi-cart-dash text-dark"></i></a>
            <h5 style="position:absolute;inset:0;left:40%;margin:auto;z-index:0" class="items font-weight-bolder">
                <?php
                $i=0;
                if (isset($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $key => $row) {
                        $i++;
                    }
                }
                echo $i;
                ?>
            </h5>
        </li>
    </ul>
    <div class="menu" style="font-size: 2rem;cursor:pointer">
        <i class="bi bi-list"></i>
    </div>
</nav>