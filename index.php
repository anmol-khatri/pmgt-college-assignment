`
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
                          <img src="images/1.png" alt="Image" />
                          <img src="images/2.png" alt="Image" />
                          <img src="images/3.png" alt="Image" />
                          <img src="images/4.png" alt="Image" />
                          <img src="images/5.png" alt="Image" />
                          <img src="images/6.png" alt="Image" />
                          <img src="images/7.png" alt="Image" />
                          <img src="images/8.png" alt="Image" />
                        </div>
                    </div>  
                </div>

                <div class="home-row-wrapper">
                    <div class="home-row-title-wrapper">
                        <div class="home-row-title">Explore Shops</div>
                    </div>
                    <div class="home-row-content">
                        <div class="shop-by-images-wrapper shop-img-side-marg">
                            <div class="shop-by-images-container">
                                <div class="product-wrap">
                                    <a class="shop-by-link" href="butcher.php">
                                        <img class="shop-by-img" src="images/butchers.jpg" alt="">
                                    </a>
                                    <div class="product-info">
                                        <h2>Bakery</h2>
                                        <p>A bakery is an establishment that produces and sells flour-based food baked in an oven such as bread, cookies, cakes, donuts, pastries, and pies.[1] Some retail bakeries are also categorized as cafés, serving coffee and tea to customers who wish to consume the baked goods on the premises.</p>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                <a class="shop-by-link" href="greengrocers.php">
                                    <img class="shop-by-img" src="images/greengrocers.jpg" alt="">
                                </a>
                                    <div class="product-info">
                                        <h2>Fishmonger</h2>
                                        <p>A fishmonger (historically fishwife for female practitioners) is someone who sells raw fish and seafood. Fishmongers can be wholesalers or retailers and are trained at selecting and purchasing, handling, gutting, boning, filleting, displaying, merchandising and selling their product.</p>
                                    </div>

                                </div>
                                <div class="product-wrap">
                                <a class="shop-by-link" href="fishmongers.php">
                                    <img class="shop-by-img" src="images/fishmongers.jpg" alt="">
                                </a>
                                    <div class="product-info">
                                        <h2>Delicatessen</h2>
                                        <p>Traditionally, a delicatessen or "deli" is a retail establishment that sells a selection of fine, exotic, or foreign prepared foods. Delicatessen originated in Germany (original: Delikatessen) during the 18th century and spread to the United States in the mid-19th century.</p>
                                    </div>

                                </div>
                                <div class="product-wrap">
                                <a class="shop-by-link" href="bakery.php">
                                    <img class="shop-by-img" src="images/bakery.jpg" alt="">
                                </a>
                                    <div class="product-info">
                                        <h2>Greengrocer</h2>
                                        <p>A greengrocer is a person who owns or operates a shop selling primarily fruit and vegetables. The term may also be used to refer to a shop selling primarily produce. It is used predominantly in the United Kingdom and Australia.</p>
                                    </div>

                                </div>
                                <div class="product-wrap">
                                <a class="shop-by-link" href="delicateseen.php">
                                    <img class="shop-by-img" src="images/delicateseen.jpg" alt="">
                                </a>
                                    <div class="product-info">
                                        <h2>Butcher</h2>
                                        <p>A butcher is a person who may slaughter animals, dress their flesh, sell their meat, or participate within any combination of these three tasks.[1] They may prepare standard cuts of meat and poultry for sale in retail or wholesale food establishments.                         
                                </div>
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
            </div>

            <div class="home-row-wrapper">
                <div class="home-row-title-wrapper">
                    <div class="home-row-title">Highly Recommended Products</div>
                </div>
                <div class="home-row-content">
                    <div class="card-row">
                        <?php
                            if(isset($_SESSION['usrid'])){
                                $id = $_SESSION['usrid'];
                            }
                            
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
                                                    <a href='product.php?prdid=$prdid'>
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