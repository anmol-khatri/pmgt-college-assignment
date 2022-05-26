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
    <link rel="stylesheet" type="text/css" href="css/product-cards.css">
    <link rel="stylesheet" href="css/omni-slider.min.css">
    <link rel="stylesheet" href="css/search.css">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</head>
<body>
<?php
include 'header.php';
?>
    <main>
        
        <div class="max-width-wrapper">
            <div class="main-search-wrapper">
                <div class="search-headers">
                    <div class="search-results">
                        All Orders
                        <?php 
                                $id = $_SESSION['usrid'];
                                 $sql = "select count(ord_id) as COUNT from orders";
                               $query_usr = oci_parse($conn, $sql);
                                $result = oci_execute($query_usr);
                                
                                
                            if ($row = oci_fetch_assoc($query_usr)){
                                echo "(".$row['COUNT'].")";
                            }
                            ?>
                    </div>
                </div>
                <div class="search-body">
                    <div class="results-wrapper">
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
                                echo "<div class='card-col-big'>
                                <div class='card-big'>
                                    <div class='card-big-body'>
                                        <div class='card-big-title'>
                                            <a href='product.php'>
                                                $prdname
                                            </a>
                                        </div>
                                        <div class='card-big-star-price'>
                                            <div class='sm-stars' style='--rating: 2.5;'></div>
                                            <div class='card-big-price'>Rs. $price</div>
                                        </div>
                                        <div class='card-key-value-wrapper'>
                                            <div class='card-key-value-row'>
                                                <div class='card-key'>Fresheness</div>
                                                <div class='card-value'>
                                                    <span class='light-text'>New</span>
                                                    <span>(Extra Fresh)</span>
                                                </div>
                                            </div>
                                            <div class='card-key-value-row'>
                                                <div class='card-key'>Trader</div>
                                                <div class='card-value'>
                                                    <span class=''>$username</span>
                                                </div>
                                            </div>
                                            <div class='card-key-value-row'>
                                                <div class='card-key'>Stock</div>
                                                <div class='card-value'>
                                                    <span class='light-text'>$stock kgs</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='card-big-links'>
                                            <div class='card-cart'>
                                                <span class='iconify' data-icon='akar-icons:edit' data-inline='false'></span>
                                            </div>
                                            <div class='card-cart'>
                                                <span></span>
                                                <span class='iconify' data-icon='ic:baseline-delete-forever' data-inline='false'></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="more-btn-wrapper">
                    <button class="more-btn">
                        <span>More Products</span>
                        <span class="iconify" data-icon="ant-design:caret-down-outlined" data-inline="false"></span>
                    </button>
                </div>
            </div>
        </div>
    </main>
<?php
include 'footer.php';
?>


    <script src="js/header.js"></script>
    <script src="js/omni-slider.min.js"></script>
    <script src="js/main-search.js"></script>
</body>
</html>