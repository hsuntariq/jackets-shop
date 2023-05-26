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
            <a style="font-weight: 600;" href="../User/HomeView.php" class="nav-link">Home</a>
        </li>
        <li class="nav-items">
            <a style="font-weight: 600;" href="../User/AboutUs.php" class="nav-link">About Us</a>
        </li>
        <li class="nav-items">
            <a style="font-weight: 600;" href="" class="nav-link">Our Products</a>
        </li>
        <li class="nav-items">
            <a style="font-weight: 600;" href="" class="nav-link">Catalogue</a>
        </li>
        <li class="nav-items">
            <a style="font-weight: 600;" href="../User/ContactUs.php" class="nav-link">Contact us</a>
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