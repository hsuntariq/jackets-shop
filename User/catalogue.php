<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- <?php
		include '../assets/bootstrap_css.php'
	?> -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
		<!-- <link rel="stylesheet" href="../styles/stylec.css"> -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
			integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" href="./styles.css">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet"
			id="bootstrap-css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<title>Document</title>
        
    </head>

    <body>
        <?php
            include '../components/sidebar.php';
            include '../components/nav2.php'
        ?>
        <section class="catalogue bg-light" style="width:100vw">
            <div class="bg-image">

            </div>
            <div class="catalogue-into d-flex justify-content-center align-item-center flex-column">
                <h1 class="text-center" style="color:#F29221">CATALOGUE</h1>
                <p class="text-secondary text-center col-lg-5 ml-auto fs-3" style="line-height:1.5;font-size:1.2rem">
                    A library catalog or library catalogue
                    is a register of all bibliographic items
                    found in a library or group of libraries,
                    such as a network of libraries at several
                    locations.
                </p>
            </div>
            <div class="row col-lg-8 m-auto align-item-center justify-content-center">
                <div class="col-md-6">
                    <img width="100%" height="80%" style="object-fit:cover"
                        src="https://helliford.com/assets/images/video.png" alt="">
                </div>
                <div class="col-md-6">
                    <img width="100%" height="80%" src="../assets/images/jacket-removebg-preview.png" alt="">
                </div>
            </div>
        </section>
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
                <div class="col-md-4 p-3 text-capitalize">
                    <h3>Follow us</h3>
                    <p>You can select any social link</p>
                    <div class="row icons d-flex justify-content-around">
							<?php
							include '../Admin/config/connect.php';
							$select = "SELECT * FROM contact_social";
							$result = mysqli_query($connection,$select);
							while ($row = mysqli_fetch_assoc($result)) {
								?>
							<a class="text-light" href="<?php echo $row['facebook']?>" class="col-2"><i class="bi bi-facebook"></i></a>
							<a class="text-light" href="<?php echo $row['twitter']?>" class="col-2"><i class="bi bi-twitter"></i></a>
							<a class="text-light" href="<?php echo $row['google']?>" class="col-2"><i class="bi bi-google"></i></a>
							<a class="text-light" href="<?php echo $row['instagram']?>" class="col-2"><i class="bi bi-instagram"></i></a>
							<a class="text-light" href="<?php echo $row['pintrest']?>" class="col-2"><i class="bi bi-pinterest"></i></a>
							<a class="text-light" href="<?php echo $row['linkedin']?>" class="col-2"><i class="bi bi-linkedin"></i></a>
							<?php
							}
							?>
						</div>
                    <h3>contact us</h3>
                    <h6>address</h6>
                    <?php
							include '../Admin/config/connect.php';
							$select = "SELECT * FROM contact";
							$result = mysqli_query($connection,$select);
							while ($row = mysqli_fetch_assoc($result)) {
								?>
                    <h6 class="text-secondary">
                        <?php echo $row['address']?>
                    </h6>
                    </h6>
                    <h6>
                        Email
                    </h6>
                    <h6 class="text-secondary">
                        <?php echo $row['email']?>
                    </h6>
                    <h6>
                        Phone
                    </h6>
                    <h6 class="text-secondary">
                        <?php echo $row['phone']?>
                    </h6>

                    <?php
							}
							?>
                </div>
            </div>
        </footer>
    </body>

</html>