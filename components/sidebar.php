<style>
    .sidebar-user {
        transition: all 0.8s;
        transform: translateX(100%);
        background-color: rgba(0, 0, 0, 0.9);
        width: 250px;
    }

    .sidebar-user a {
        color: #F29221;
        font-weight: 800;
    }

    .show-sidebar {
        transform: translateX(0%) !important;
    }

    .close-btn {
        font-weight: 800 !important;
    }
</style>
<div class="sidebar-user" style="
                height: 100vh;
                position: fixed;
                top: 0;
                z-index: 2222222;
                right: 0;
                ">
    <div class="close-btn text-right mr-2" style="font-weight:800;font-size:2rem;">
        <i class="bi bi-x-lg" style="color:red"></i>
    </div>
    <ul class="m-auto d-flex flex-column" style="list-style:none">
       <li class="nav-items">
            <a style="font-weight: 600;" href="" class="nav-link active">Home</a>
        </li>
        <li class="nav-items">
            <a style="font-weight: 600;" href="../User/AboutUs.php" class="nav-link">About Us</a>
        </li>
        <li class="nav-items">
            <a style="font-weight: 600;" href="../User/products.php" class="nav-link">Our Products</a>
        </li>
        <li class="nav-items">
            <a style="font-weight: 600;" href="../User/catalogue.php" class="nav-link">Catalogue</a>
        </li>
        <li class="nav-items">
            <a style="font-weight: 600;" href="../User/ContactUs.php" class="nav-link">Contact us</a>
        </li>
        <li class="dropdown d-flex align-self-center p-3">
                    <a style="color:#E49234;font-weight: 600;height:100%" class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Categories
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <?php
                        include '../Admin/config/connect.php';
                        $select = "SELECT DISTINCT name FROM category";
                        $result = mysqli_query($connection, $select);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                ?>
                            <li><a class="dropdown-item" href="../User/category.php?name=<?php echo $row['name']?>"><?php echo $row['name']?></a></li>
                        <?php }
                        }?>
                        <!-- <li><a class="dropdown-item" href="../contact/social_contact.php">Update Social Media</a></li>
                        <li><a class="dropdown-item" href="../contact/contact.php">Update Other Contacts</a></li> -->
                    </ul>
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
</div>


<script>
    let list = document.querySelector('.bi-list')
    let close_btn = document.querySelector('.close-btn')
    let sidebar = document.querySelector('.sidebar-user')
    list.addEventListener('click', () => {
        sidebar.classList.toggle('show-sidebar');
    })
    close_btn.addEventListener('click', () => {
        sidebar.classList.toggle('show-sidebar');
    })
</script>