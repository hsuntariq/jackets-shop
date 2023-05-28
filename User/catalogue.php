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
        <section class="catalogu bg-light" style="width:100vw">
            <div class="bg-image">

            </div>
            <div class="catalogue-into d-flex justify-content-center align-item-center flex-column">
                <h1 class="text-center" style="color:#F29221">CATALOGUE</h1>
                <?php
                    include '../Admin/config/connect.php';
                    $select = "SELECT * FROM catalogue";
                $result = mysqli_query($connection, $select);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                <p class="text-secondary text-center col-lg-5 ml-auto fs-3" style="line-height:1.5;font-size:1.2rem">
                    <?php echo $row['catalogue_description']?>
                </p>
            </div>
            <div class="row col-lg-8 m-auto align-item-center justify-content-center">
                <div class="col-md-6">
                    <img width="100%" height="80%" style="object-fit:cover"
                        src="../Admin/assets/images/<?php echo $row['image1']?>" alt="">
                </div>
                <div class="col-md-6">
                    <img width="100%" height="80%" src="../Admin/assets/images/<?php echo $row['image2']?>"  alt="">
                </div>
            </div>
            <?php
                    }
                }?>
        </section>
        <?php
        include '../components/footer.php';
        ?>
    </body>

</html>