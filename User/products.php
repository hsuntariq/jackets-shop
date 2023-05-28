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
            .our-products {
                /* padding: 50px 0; */
            }

            .container {
                max-width: 1200px;
                margin: 0 auto;
                text-align: center;
            }

            h2 {
                font-size: 36px;
                font-weight: bold;
                margin-bottom: 30px;
                color: #e29338;
            }

            .product-list {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }

            .product-item {
                width: 300px;
                margin: 20px;
                padding: 20px;
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            }

            .product-item img {
                width: 100% !important;
                height: 200px !important;
                object-fit: cover;
                border-radius: 10px;
                margin-bottom: 10px;
            }

            .product-item h4 {
                font-size: 18px;
                margin-bottom: 10px;
                color: #e29338;
            }

            .pagination {
                margin-top: 20px;
            }

            .pagination a {
                display: inline-block;
                padding: 8px 12px;
                margin-right: 5px;
                background-color: #fff;
                color: #e29338;
                text-decoration: none;
                border-radius: 5px;
            }

            .pagination a.active {
                background-color: #e29338;
                color: #e29338;
            }
        </style>
    </head>


    <body>
        <?php include '../components/nav2.php';
            include '../components/sidebar.php';
        
        ?>
        <section class="our-products">
            <div class="container">
                <h2>Our Products</h2>
                <div class="product-list">
                    <?php
      include '../Admin/config/connect.php';
      // Pagination
      $resultsPerPage = 4;
      $query = "SELECT * FROM product";
      $result = mysqli_query($connection, $query);
      $totalResults = mysqli_num_rows($result);
      $totalPages = ceil($totalResults / $resultsPerPage);

      if (!isset($_GET['page'])) {
        $currentPage = 1;
      } else {
        $currentPage = $_GET['page'];
      }

      $startIndex = ($currentPage - 1) * $resultsPerPage;
      $query .= " LIMIT $startIndex, $resultsPerPage";
      $result = mysqli_query($connection, $query);

      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $productName = $row['name'];
          $productImage = $row['image'];
      ?>
                    <div class="product-item">
                        <img src="../Admin/assets/images/<?php echo $productImage; ?>"
                            alt="<?php echo $productName; ?>">
                        <h4><?php echo $productName; ?></h4>
                        <a href="./cart.php?id=<?php echo $row['id']?>" class="btn text-light rounded-pill" style="background-color: #e29338;">
                        Add To Cart
                    </a>
                    </div>
                    <?php
        }
      } else {
        echo "<p>No products available.</p>";
      }
      ?>
                </div>

                <!-- Pagination Links -->
                <div class="pagination">
                    <?php
      if ($totalPages > 1) {
        for ($i = 1; $i <= $totalPages; $i++) {
          echo '<a href="products.php?page=' . $i . '" class="' . ($currentPage == $i ? "active" : "") . '">' . $i . '</a>';
        }
      }
      ?>
                </div>
            </div>
        </section>
      <?php
      include '../components/footer.php';
      ?>


    </body>

</html>