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
		<style>
			.logo {

				font-family: 'Dancing Script' !important;
			}

			.category-page {
				font-size: 0;
			}

			.MultiCarousel {
				float: left;
				overflow: hidden;
				padding: 15px;
				width: 100%;
				position: relative;
			}

			.MultiCarousel .MultiCarousel-inner {
				transition: 1s ease all;
				float: left;
			}

			.MultiCarousel .MultiCarousel-inner .item {
				float: left;
			}

			.MultiCarousel .MultiCarousel-inner .item>div {
				text-align: center;
				padding: 10px;
				margin: 10px;
				background: #f1f1f1;
				color: #666;
			}

			.MultiCarousel .leftLst,
			.MultiCarousel .rightLst {
				position: absolute;
				border-radius: 50%;
				top: calc(50% - 20px);
			}

			.MultiCarousel .leftLst {
				left: 0;
			}

			.MultiCarousel .rightLst {
				right: 0;
			}

			.MultiCarousel .leftLst.over,
			.MultiCarousel .rightLst.over {
				pointer-events: none;
				background: #ccc;
			}
		</style>
	</head>

	<body>

		<?php
		session_start();
		include '../components/nav.php';
            if(isset($_SESSION['message'])){
                echo "<div style='position:fixed;right:0;top:0;z-index:32223' class='bg-success text-light col-8 col-sm-3 p-3 test'>". $_SESSION['message'] . "</div>";
                }
			include '../components/sidebar.php';
			
		?>



		<div class="landing-page" style="background-color: black; width: 100vw;">
			<!-- <img width="100%" src="http://impetus.pk/pictures/banner/impetus-motorbike-clothing.jpeg" alt=""> -->
			<div id="carouselExampleIndicators" class="carousel slide w-100" data-ride="carousel">
				<ol class="carousel-indicators">
					<?php
        include '../Admin/config/connect.php';
        $select = 'SELECT * FROM `slider`';
        $result = mysqli_query($connection, $select);
        if (mysqli_num_rows($result) > 0) {
            foreach ($result as $index => $row) {
                ?>
					<li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $index; ?>"
						<?php if ($index === 0) echo 'class="active"'; ?>></li>
					<?php
            }
        }
        ?>
				</ol>
				<div class="carousel-inner">
					<?php
        mysqli_data_seek($result, 0); // Reset the result pointer to the beginning
        if (mysqli_num_rows($result) > 0) {
            foreach ($result as $index => $row) {
                ?>
					<div class="carousel-item <?php if ($index === 0) echo 'active'; ?>">
						<img width="100vw" style="object-fit:cover" height="500px" class="d-block w-100"
							src="../Admin/assets/images/<?php echo $row['image']; ?>" alt="Slide <?php echo $index; ?>">
					</div>
					<?php
            }
        }
        ?>
				</div>
			</div>
		</div>
		<section class="category-page">
			<div class="category-title">
				<h1 class="text-center display-3" style="font-weight:600">
					CATEGORY <br>
					<span class="range">RANGE</span>
				</h1>
				<hr class='underline m-auto'>
				<p class="text-light text-center col-lg-9 m-auto">
					The Manufacturer of Motorbike Clothing all types, the complete assortment of leather protections
					for
					Bikers. Live our experience in the field of
					following categories of Motorbike Clothings
				</p>
			</div>
			<div class="category-items grid-parent container-fluid mb-3">
				<div class="row m-auto justify-content-center" style="font-size:0rem !important">
					<?php
	include '../Admin/config/connect.php';
	$limit = 6; // Number of items to display per page

	// Get the total number of rows
	$countQuery = "SELECT COUNT(*) as total FROM category";
	$countResult = mysqli_query($connection, $countQuery);
	$countRow = mysqli_fetch_assoc($countResult);
	$totalItems = $countRow['total'];

	// Calculate the total number of pages
	$totalPages = ceil($totalItems / $limit);

	// Get the current page number
	if (isset($_GET['page'])) {
		$page = $_GET['page'];
	} else {
		$page = 1;
	}

	// Calculate the offset for the SQL query
	$offset = ($page - 1) * $limit;

	$select = "SELECT * FROM category LIMIT $offset, $limit";
	$res = mysqli_query($connection, $select);
	if (mysqli_num_rows($res) > 0) {
		$i = 0;
		while ($row = mysqli_fetch_array($res)) {
			$products[] = $row;
		}
			?>
					<a href="./category.php?name=<?php echo $products[$i]['name']?>"
						class="child child<?php echo ($i+1); ?> col-sm-6 col-12 mb-3 col-lg-3 col-md-3">
						<img width="100%" class="" height="250px" style="object-fit:cover;border-radius:20px"
							src="<?php echo isset($products[$i]['c_image']) ? '../Admin/assets/images/'.$products[$i]['c_image'] : '../Admin/assets/images/skeleton-loading.gif'; ?>"
							alt="">

					</a>
					<?php $i++?>
					<a href="./category.php?name=<?php echo $products[$i]['name']?>"
						class="child child2 col-sm-6 col-12 mb-3 col-lg-3 col-md-3">
						<img width="100%" class="" height="250px" style="object-fit:cover;border-radius:20px"
							src="<?php echo isset($products[$i]['c_image']) ? '../Admin/assets/images/'.$products[$i]['c_image'] : '../Admin/assets/images/skeleton-loading.gif'; ?>"
							alt="">">
					</a>
					<?php $i++?>
					<a href="./category.php?name=<?php echo $products[$i]['name']?>"
						class="child child3 col-sm-6 col-12 mb-3 col-lg-6 col-md-6">
						<img width="100%" class="" height="250px" style="object-fit:cover;border-radius:20px"
							src="<?php echo isset($products[$i]['c_image']) ? '../Admin/assets/images/'.$products[$i]['c_image'] : '../Admin/assets/images/skeleton-loading.gif'; ?>"
							alt="">>
					</a>
					<?php $i++?>
					<a href="./category.php?name=<?php echo $products[$i]['name']?>"
						class="child child4 col-sm-6 col-12 mb-3 col-lg-6 col-md-6">
						<img width="100%" class="" height="250px" style="object-fit:cover;border-radius:20px"
							src="<?php echo isset($products[$i]['c_image']) ? '../Admin/assets/images/'.$products[$i]['c_image'] : '../Admin/assets/images/skeleton-loading.gif'; ?>"
							alt="">alt="">
					</a>
					<?php $i++?>
					<a href="./category.php?name=<?php echo $products[$i]['name']?>"
						class="child child5 col-sm-6 col-12 mb-3 col-lg-3 col-md-3">
						<img width="100%" class="" height="250px" style="object-fit:cover;border-radius:20px"
							src="<?php echo isset($products[$i]['c_image']) ? '../Admin/assets/images/'.$products[$i]['c_image'] : '../Admin/assets/images/skeleton-loading.gif'; ?>"
							alt="">
					</a>
					<?php $i++?>
					<a href="./category.php?name=<?php echo $products[$i]['name']?>"
						class="child child6 col-sm-6 col-12 mb-3 col-lg-3 col-md-3">
						<img width="100%" class="" height="250px" style="object-fit:cover;border-radius:20px"
							src="<?php echo isset($products[$i]['c_image']) ? '../Admin/assets/images/'.$products[$i]['c_image'] : '../Admin/assets/images/skeleton-loading.gif'; ?>"
							alt="">
					</a>
					<?php $i++?>

					// Display pagination links
					<?php 
		echo "<ul class='pagination'>";
			for ($pageNum = 1; $pageNum <= $totalPages; $pageNum++) {
			echo "<li><a style='font-size:1.7rem;color:#e29338' href='?page=$pageNum'>$pageNum</a></li>";
		}
		echo "</ul>";
	} else {
		echo "<h4 class='text-danger display-2 text-center'>No categories to display</h4>";
	}
			?>
					?>


					<!-- <div class=" child child1 col-sm-6 col-12 mb-3 col-lg-3 col-md-3">
						<img width="100%" class="" height="250px" style="object-fit:cover;border-radius:20px"
							src="https://helliford.com/uploads/categories/sports-wear_63CD27_cthumb.png" alt="">
					</div>
					<div class="child child2 col-sm-6 col-12 mb-3 col-lg-3 col-md-3">
						<img width="100%" class="" height="250px" style="object-fit:cover;border-radius:20px"
							src="https://helliford.com/uploads/categories/fitness-wear_A1956C_cthumb.png" alt="">
					</div>
					<div class="child child3 col-sm-6 col-12 mb-3 col-lg-6 col-md-6">
						<img width="100%" class="" height="250px" style="object-fit:cover;border-radius:20px"
							src="https://helliford.com/uploads/categories/accessories_563A1E_cthumb.png" alt="">
					</div>
					<div class="child child4 col-sm-6 col-12 mb-3 col-lg-6 col-md-6">
						<img width="100%" class="" height="250px" style="object-fit:cover;border-radius:20px"
							src="https://helliford.com/uploads/products/accessories/bags/hfi-1010_pimg1.jpg" alt="">
					</div>
					<div class="child child5 col-sm-6 col-12 mb-3 col-lg-3 col-md-3">
						<img width="100%" class="" height="250px" style="object-fit:cover;border-radius:20px"
							src="https://helliford.com/assets/images/sr3.png" alt="">
					</div>
					<div class="child child6 col-sm-6 col-12 mb-3 col-lg-3 col-md-3">
						<img width="100%" class="" height="250px" style="object-fit:cover;border-radius:20px"
							src="https://helliford.com/assets/images/sr2.png" alt="">
					</div> -->
				</div>
			</div>

		</section>
		<div class="container">
			<div class="row">
				<div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel" data-interval="1000">
					<div class="MultiCarousel-inner">
						<?php
							include '../Admin/config/connect.php';
									$select = 'SELECT * FROM product';
									$result = mysqli_query($connection,$select);
							if (mysqli_num_rows($result) > 0) {
								while ($row = mysqli_fetch_assoc($result)) {
									?>
						<div class="item">
							<div class="pad15" style="border:2px solid #E29338;border-radius:10px;background:white;">

								<img height="100px" width="100px" style="object-fit:contain"
									src="../Admin/assets/images/<?php echo $row['image']?>" alt="">
								<input type="hidden" name="image"
									value="../Admin/assets/images/<?php echo $row['image']?>">
								<h4><?php echo $row['name']?></h4>
								<input type="hidden" name="name" value="<?php echo $row['name']?>">
								<h4>Rs.<?php echo $row['price']?></h4>
								<input type="hidden" name="price" value="<?php echo $row['price']?>">
								<a href="./cart.php?id=<?php echo $row['id']?>" type="submit" name='add-to-cart'
									class="text-light btn" style="background:#E29338;border-radius:20px">Add To
									Cart</a>

							</div>
						</div>
						<?php
								}
							}
								?>
					</div>
					<button class="btn leftLst" style="background-color: #E29338;">
						<</button> <button class="btn rightLst" style="background-color: #E29338;">>
					</button>
				</div>
			</div>
		</div>
		<div class="feature-product">
			<h3 class="text-center text-uppercase display-3">
				feature <br>
				<span class="range">product</span>
			</h3>
			<hr class='underline m-auto'>
			<p class="text-secondary text-center mt-2">
			</p>
		</div>

		<?php

		include '../components/footer.php';
		include '../assets/bootstrap_js.php'
	?>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
			integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
		</script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
			integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
		</script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
			integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
		</script>
		<script>
			let nav = document.querySelector('.myNav');
			let cards = document.querySelector('.slider')
			let btn = document.querySelector('.next')
			window.addEventListener('scroll', function () {
				let y = window.scrollY;
				nav.style.trasnition = 'all 0.9s'
				if (y > 1) {
					nav.style.transition = 'all 0.4s'
					nav.style.transform = 'translateY(-35px)'
				}
				if (y <= 2) {
					nav.style.transition = 'all 0.4s'
					nav.style.transform = 'translateY(0)'
				}
			})
			let test = document.querySelector('.test');
			setTimeout(() => {
				test.style.transition = 'all 0.7s'
				test.style.transform = 'translateX(100%)'

			}, 1000)
			$(document).ready(function () {
				var itemsMainDiv = ('.MultiCarousel');
				var itemsDiv = ('.MultiCarousel-inner');
				var itemWidth = "";

				$('.leftLst, .rightLst').click(function () {
					var condition = $(this).hasClass("leftLst");
					if (condition)
						click(0, this);
					else
						click(1, this)
				});

				ResCarouselSize();




				$(window).resize(function () {
					ResCarouselSize();
				});

				//this function define the size of the items
				function ResCarouselSize() {
					var incno = 0;
					var dataItems = ("data-items");
					var itemClass = ('.item');
					var id = 0;
					var btnParentSb = '';
					var itemsSplit = '';
					var sampwidth = $(itemsMainDiv).width();
					var bodyWidth = $('body').width();
					$(itemsDiv).each(function () {
						id = id + 1;
						var itemNumbers = $(this).find(itemClass).length;
						btnParentSb = $(this).parent().attr(dataItems);
						itemsSplit = btnParentSb.split(',');
						$(this).parent().attr("id", "MultiCarousel" + id);


						if (bodyWidth >= 1200) {
							incno = itemsSplit[3];
							itemWidth = sampwidth / incno;
						} else if (bodyWidth >= 992) {
							incno = itemsSplit[2];
							itemWidth = sampwidth / incno;
						} else if (bodyWidth >= 768) {
							incno = itemsSplit[1];
							itemWidth = sampwidth / incno;
						} else {
							incno = itemsSplit[0];
							itemWidth = sampwidth / incno;
						}
						$(this).css({
							'transform': 'translateX(0px)',
							'width': itemWidth * itemNumbers
						});
						$(this).find(itemClass).each(function () {
							$(this).outerWidth(itemWidth);
						});

						$(".leftLst").addClass("over");
						$(".rightLst").removeClass("over");

					});
				}


				//this function used to move the items
				function ResCarousel(e, el, s) {
					var leftBtn = ('.leftLst');
					var rightBtn = ('.rightLst');
					var translateXval = '';
					var divStyle = $(el + ' ' + itemsDiv).css('transform');
					var values = divStyle.match(/-?[\d\.]+/g);
					var xds = Math.abs(values[4]);
					if (e == 0) {
						translateXval = parseInt(xds) - parseInt(itemWidth * s);
						$(el + ' ' + rightBtn).removeClass("over");

						if (translateXval <= itemWidth / 2) {
							translateXval = 0;
							$(el + ' ' + leftBtn).addClass("over");
						}
					} else if (e == 1) {
						var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
						translateXval = parseInt(xds) + parseInt(itemWidth * s);
						$(el + ' ' + leftBtn).removeClass("over");

						if (translateXval >= itemsCondition - itemWidth / 2) {
							translateXval = itemsCondition;
							$(el + ' ' + rightBtn).addClass("over");
						}
					}
					$(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
				}

				//It is used to get some elements from btn
				function click(ell, ee) {
					var Parent = "#" + $(ee).parent().attr("id");
					var slide = $(Parent).attr("data-slide");
					ResCarousel(ell, Parent, slide);
				}

			});
		</script>
	</body>

</html>