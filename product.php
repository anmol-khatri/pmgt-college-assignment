<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/ClickHudderFax-name.png" type="image/x-icon">
    <title>ClickHudderFax</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="css/stars.css">
    <link rel="stylesheet" type="text/css" href="css/product-cards.css">
    <link rel="stylesheet" href="css/product.css">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</head>
<body>
<?php
include 'header.php';
?>
    <main>

        <div class="max-width-wrapper">
            <div class="main-product-wrapper">
                <div class="product-details-wrapper">

                    <?php
                    $prdid = $_GET['prdid'];
                    $sql = "select * from product where prd_id = $prdid";
                    $query_usr = oci_parse($conn, $sql);
                    $result = oci_execute($query_usr);  
                    if ($row = oci_fetch_assoc($query_usr)){
                        $prdimg = $row['PRD_IMG'];
                        $prdname = $row['PRD_NAME'];
                        $price = $row['PRD_PRICE'];
                        $stock = $row['PRD_STOCK'];
                        $details = $row['PRD_DESCRIPTION'];

                        echo "<div class='products-main-div-wrapper'>
                            <div class='product-gallery'>
                                <div class='product-preiview-img-wrapper'>
                                    <img id='preview-img' class='product-preiview-img' src='images/$prdimg' alt='Alt'>
                                </div>
                            </div>
                            <div class='product-details'>
                                <div id='zoom-img-result' class='zoom-img-result'></div>
                                <div class='product-title'>
                                    $prdname
                                </div>
                                <div class='rating-share-wrapper'>
                                    <div>
                                        <div class='product-ratings-wrap'>
                                            <div class='md-stars' style='--rating: 4.4;'></div>
                                            <div class='product-rating-in-num'>
                                                4.4 Ratings
                                            </div>
                                        </div>
                                        <div class='d-flex'>
                                            <div class='stock-text'>
                                                In Stock: $stock
                                            </div>
                                        </div>
                                    </div>
                                    <div id='share-product' class='share-product'>
                                        <span class='iconify' data-icon='bi:share-fill' data-inline='false'></span>
                                    </div>
                                </div>
                                <div class='price-wrapper'>
                                    Price: Rs. $price
                                </div>
                                <div class='product-desc'>
                                    $details
                                </div>
                                <div class='quantity-wrapper'>
                                    <span>Quantity</span>
                                    <button id='subtract-quantity' class='quantity-btn'>-</button>
                                    <span id='quantity-value' class='quantity'>1</span>
                                    <button id='add-quantity' class='quantity-btn'>+</button>
                                </div>
                                <div class='product-actions'>
                                    <button id='buy-now' class='product-action buy-now'>Buy Now</button>

                                    <button id='add-to-cart' class='product-action add-to-cart'><a href='cartadd.php?prdid=$prdid'>Add to Cart</a></button>
                                </div>
                            </div>
                        </div>";
                    }

                    ?>


                    <div class="prod-section-wrapper">
                        <div class="rating-reviews-wrapper">
                            <div class="prod-section-heading">
                                Ratings and Reviews
                            </div>
                            <div class="advance-rating-wrapper">
                                <div class="main-rating-wrapper">
                                    <div>
                                        <span class="rating-value">4.4</span>
                                        <span class="rating-helper-span">/</span>
                                        <span class="rating-helper-span">5</span>
                                    </div>
                                    <div>
                                        <div class="lg-stars" style="--rating: 4.4;"></div>
                                    </div>
                                    <div class="grey-text">
                                        <span>5</span> Ratings
                                    </div>
                                </div>
                                <div class="rating-summary-wrapper">
                                    <div class="rating-summary-row">
                                        <div class="md-stars" style="--rating: 5;"></div>
                                        <div class="rating-percent-bar-wrapper">
                                            <div class="rating-percent-bar" style="width: 15%;"></div>
                                        </div>
                                        <div class="rating-numbers">4</div>
                                    </div>
                                    <div class="rating-summary-row">
                                        <div class="md-stars" style="--rating: 4;"></div>
                                        <div class="rating-percent-bar-wrapper">
                                            <div class="rating-percent-bar" style="width: 70%;"></div>
                                        </div>
                                        <div class="rating-numbers">4</div>
                                    </div>
                                    <div class="rating-summary-row">
                                        <div class="md-stars" style="--rating: 3;"></div>
                                        <div class="rating-percent-bar-wrapper">
                                            <div class="rating-percent-bar" style="width: 5%;"></div>
                                        </div>
                                        <div class="rating-numbers">4</div>
                                    </div>
                                    <div class="rating-summary-row">
                                        <div class="md-stars" style="--rating: 2;"></div>
                                        <div class="rating-percent-bar-wrapper">
                                            <div class="rating-percent-bar" style="width: 5%;"></div>
                                        </div>
                                        <div class="rating-numbers">4</div>
                                    </div>
                                    <div class="rating-summary-row">
                                        <div class="md-stars" style="--rating: 1;"></div>
                                        <div class="rating-percent-bar-wrapper">
                                            <div class="rating-percent-bar" style="width: 5%;"></div>
                                        </div>
                                        <div class="rating-numbers">4</div>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews-wrapper">
                                <div class="review-heading">Reviews</div>
                                <div class="each-review-row">
                                    <div class="raters-rating-wrapper">
                                        <div class="md-stars" style="--rating: 4;"></div>
                                        <div class="rater-wrapper">
                                            <span class="rater">by customer1</span>
                                            <span class="isVerified"></span>
                                        </div>
                                    </div>
                                    <div class="raters-text">
                                        Good quality product:)
                                    </div>
                                </div>
                                <div class="each-review-row">
                                    <div class="raters-rating-wrapper">
                                        <div class="md-stars" style="--rating: 4;"></div>
                                        <div class="rater-wrapper">
                                            <span class="rater">by customer2</span>
                                            <span class=""></span>
                                        </div>
                                    </div>
                                    <div class="raters-text">
                                        Noice product:)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="prod-section-wrapper">
                        <div class="rating-reviews-wrapper">
                            <div class="queries-heading">
                                Queries
                            </div>
                            <div class="queries-form-wrapper">
                                <form class="queries-form" action="#" method="post">
                                    <input class="query-inpt" type="text" placeholder="Your queries...">
                                    <button type="submit" class="submit-btn">Submit</button>
                                </form>
                                <div class="all-queries-wrapper">
                                    <div class="queries-trader-heading">
                                        Queries answered by trader
                                    </div>
                                    <div class="queries-row">
                                        <div class="each-query">
                                            <div class="query-wrapper">
                                                <div class="query-indicator"></div>
                                                <div>
                                                    <div class="query-text">What is the quality of the product?</div>
                                                    <div class="querer-detail">
                                                        <span>by customer1</span>
                                                        <span class="stock-text">1 day ago</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="query-wrapper">
                                                <div class="query-indicator answer"></div>
                                                <div>
                                                    <div class="query-text">It is good.</div>
                                                    <div class="querer-detail">
                                                        <span>by trader</span>
                                                        <span class="stock-text">1 day ago</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="each-query">
                                            <div class="query-wrapper">
                                                <div class="query-indicator"></div>
                                                <div>
                                                    <div class="query-text">What is the quality of the product?</div>
                                                    <div class="querer-detail">
                                                        <span>by customer1</span>
                                                        <span class="stock-text">1 day ago</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="query-wrapper">
                                                <div class="query-indicator answer"></div>
                                                <div>
                                                    <div class="query-text">It is good.</div>
                                                    <div class="querer-detail">
                                                        <span>by trader</span>
                                                        <span class="stock-text">1 day ago</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
    <script src="js/shopBySlider.js"></script>
    <script src="js/imageZoom.js"></script>
    <script src="js/main-product.js"></script>
</body>
</html>