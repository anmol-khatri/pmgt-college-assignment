
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/ClickHudderFax-name.png" type="image/x-icon">
    <title>ClickHudderFax</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/stars.css">
    <link rel="stylesheet" type="text/css" href="css/slider.css">
    <link rel="stylesheet" type="text/css" href="css/product-cards.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
<?php
include 'init.php';
include 'header.php';

if (isset($_SESSION['user'])) {
    echo $_SESSION['user'];
}
?>
    <main>
    <div class="max-width-wrapper">
        <div class="main-wrapper">
            <div class="home-row-wrapper">
                <div class="carousel-container">
                    <div id="first-slider" class="carousel-image-wrapper">
                      <img src="images/slider1.jpg" alt="Image" />
                      <img src="images/slider1.jpg" alt="Image" />
                      <img src="images/slider1.jpg" alt="Image" />
                      <img src="images/slider1.jpg" alt="Image" />
                    </div>
                </div>  
            </div>

            <div class="home-row-wrapper">
                <div class="home-row-title-wrapper">
                    <div class="home-row-title">Ours Partners Traders</div>
                </div>
                <div class="home-row-content">
                    <div class="shop-by-images-wrapper shop-img-side-marg">
                        <div class="shop-by-images-container">
                            <a class="shop-by-link" href="#">
                                <img class="shop-by-img" src="images/butchers.jpg" alt="">
                            </a>
                            <a class="shop-by-link" href="#">
                                <img class="shop-by-img" src="images/greengrocers.jpg" alt="">
                            </a>
                            <a class="shop-by-link" href="#">
                                <img class="shop-by-img" src="images/fishmongers.jpg" alt="">
                            </a>
                            <a class="shop-by-link" href="#">
                                <img class="shop-by-img" src="images/bakery.jpg" alt="">
                            </a>
                            <a class="shop-by-link" href="#">
                                <img class="shop-by-img" src="images/delicateseen.jpg" alt="">
                            </a>
                        </div>
                        <div class="shop-by-controls d-none">
                            <span id="shop-by-prev">
                                <span class="iconify" data-icon="akar-icons:circle-chevron-left-fill" data-inline="false"></span>
                            </span>
                            <span id="shop-by-next">
                                <span class="iconify" data-icon="akar-icons:circle-chevron-right-fill" data-inline="false"></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="home-row-wrapper">
                <div class="home-row-title-wrapper">
                    <div class="home-row-title">Highly Recommended Products</div>
                </div>
                <div class="home-row-content">
                    <div class="card-row">
                        <?php

                            $id = $_SESSION['usrid'];
                            // $add = "where type=$type and shop = $shop"
                            $sql = "select * from shop
                            inner join trader on trader.trd_id = shop.trd_id
                            inner join product on product.shp_id = shop.shp_id";
                           $query_usr = oci_parse($conn, $sql);
                            $result = oci_execute($query_usr);
                                
                                
                            while ($row = oci_fetch_assoc($query_usr)){
                                $prdimg = $row['PRD_IMG'];
                                $prdname = $row['PRD_NAME'];
                                $price = $row['PRD_PRICE'];
                                $stock = $row['PRD_STOCK'];
                                $username = $row['USERNAME'];
                                $prdid = $row['PRD_ID'];
                                echo"<div class='card-col'>
                                        <div class='card'>
                                            <div class='card-img-wrapper'>
                                                <a href='product.php?prdid=$prdid'>
                                                    <img class='card-img' src='images/$prdimg' alt=''>
                                                </a>
                                            </div>
                                            <div class='card-body'>
                                                <div class='card-title'>
                                                    <a href='product.php?prdid=$prdid''>
                                                        $prdname
                                                    </a>
                                                </div>
                                                <span><a href='cartadd.php?prdid=$prdid'>Add to cart</a></span>

                                                <div class='card-footer'>
                                                    <div class='card-price'>Rs. $price</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>";
                            }
                        ?>

                    </div>
                </div>  
            </div>
        </div>
    </div>
    </main>

   <?php
include 'footer.php';
?>


    <script src="js/header.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/shopBySlider.js"></script>
    <script src="js/main.js"></script>
</body>
</html>