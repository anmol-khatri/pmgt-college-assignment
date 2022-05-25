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
                        Manage Products (54)
                    </div>
                    <a href="add-product.php" class="add-product">Add Product</a>
                </div>
                <div class="search-body">
                    <div class="filters-wrapper">
                        <form id="filter-form" class="filter-form" action="#" method="get">
                            <div class="filter-row">
                                <div class="filter-heading">Rating: </div>
                                <div class="filter-body">
                                    <div class="filter-stars-row">
                                        <a href="#">
                                            <div class="md-stars" style="--rating: 5"></div>
                                        </a>
                                    </div>
                                    <div class="filter-stars-row">
                                        <a href="#" class="d-flex">
                                            <div class="md-stars" style="--rating: 4"></div>
                                            <div class="and-up"> & above</div>
                                        </a>
                                    </div>
                                    <div class="filter-stars-row">
                                        <a href="#" class="d-flex">
                                            <div class="md-stars" style="--rating: 3"></div>
                                            <div class="and-up"> & above</div>
                                        </a>
                                    </div>
                                    <div class="filter-stars-row">
                                        <a href="#" class="d-flex">
                                            <div class="md-stars" style="--rating: 2"></div>
                                            <div class="and-up"> & above</div>
                                        </a>
                                    </div>
                                    <div class="filter-stars-row">
                                        <a href="#" class="d-flex">
                                            <div class="md-stars" style="--rating: 1"></div>
                                            <div class="and-up"> & above</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-row">
                                <div class="filter-heading">
                                    Price:
                                </div>
                                <div class="filter-body">
                                    <div id="myRangeSlider" class="myRangeSlider"></div>
                                    <!-- <input  type="text" id="myRangeSlider" /> -->
                                    <div class="min-max-wrapper">
                                        <input class="minMaxPrice" type="number" name="minPrice" id="minPrice" placeholder="Min" value="1000" readonly>
                                        <input class="minMaxPrice" type="number" name="maxPrice" id="maxPrice" placeholder="Max" value="4000" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-row">
                                <div class="filter-btn">Apply</div>
                                <div class="filter-reset-btn">Reset</div>
                            </div>
                        </form>
                    </div>
                    <div class="results-wrapper">
                        <div class="card-row">
                            <div class="card-col-big">
                                <div class="card-big">
                                    <div class="card-img-wrapper">
                                        <a href="product.php">
                                            <img class="card-big-img" src="images/placeholder-image.png" alt="">
                                        </a>
                                    </div>
                                    <div class="card-big-body">
                                        <div class="card-big-title">
                                            <a href="product.php">
                                                Product Title
                                            </a>
                                        </div>
                                        <div class="card-big-star-price">
                                            <div class="sm-stars" style="--rating: 2.5;"></div>
                                            <div class="card-big-price">2000 GBP</div>
                                        </div>
                                        <div class="card-key-value-wrapper">
                                            <div class="card-key-value-row">
                                                <div class="card-key">Fresheness</div>
                                                <div class="card-value">
                                                    <span class="light-text">New</span>
                                                    <span>(Extra Fresh)</span>
                                                </div>
                                            </div>
                                            <div class="card-key-value-row">
                                                <div class="card-key">Trader</div>
                                                <div class="card-value">
                                                    <span class="">Trader Name</span>
                                                </div>
                                            </div>
                                            <div class="card-key-value-row">
                                                <div class="card-key">Stock</div>
                                                <div class="card-value">
                                                    <span class="light-text">20 kgs</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-big-links">
                                            <div class="card-cart">
                                                <span class="iconify" data-icon="akar-icons:edit" data-inline="false"></span>
                                            </div>
                                            <div class="card-cart">
                                                <span></span>
                                                <span class="iconify" data-icon="ic:baseline-delete-forever" data-inline="false"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-col-big">
                                <div class="card-big">
                                    <div class="card-img-wrapper">
                                        <a href="product.php">
                                            <img class="card-big-img" src="images/placeholder-image.png" alt="">
                                        </a>
                                    </div>
                                    <div class="card-big-body">
                                        <div class="card-big-title">
                                            <a href="product.php">
                                                Product Title
                                            </a>
                                        </div>
                                        <div class="card-big-star-price">
                                            <div class="sm-stars" style="--rating: 2.5;"></div>
                                            <div class="card-big-price">2000 GBP</div>
                                        </div>
                                        <div class="card-key-value-wrapper">
                                            <div class="card-key-value-row">
                                                <div class="card-key">Fresheness</div>
                                                <div class="card-value">
                                                    <span class="light-text">New</span>
                                                    <span>(Extra Fresh)</span>
                                                </div>
                                            </div>
                                            <div class="card-key-value-row">
                                                <div class="card-key">Trader</div>
                                                <div class="card-value">
                                                    <span class="">Trader Name</span>
                                                </div>
                                            </div>
                                            <div class="card-key-value-row">
                                                <div class="card-key">Stock</div>
                                                <div class="card-value">
                                                    <span class="light-text">20 kgs</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-big-links">
                                            <div class="card-cart">
                                                <span class="iconify" data-icon="akar-icons:edit" data-inline="false"></span>
                                            </div>
                                            <div class="card-cart">
                                                <span></span>
                                                <span class="iconify" data-icon="ic:baseline-delete-forever" data-inline="false"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-col-big">
                                <div class="card-big">
                                    <div class="card-img-wrapper">
                                        <a href="product.php">
                                            <img class="card-big-img" src="images/placeholder-image.png" alt="">
                                        </a>
                                    </div>
                                    <div class="card-big-body">
                                        <div class="card-big-title">
                                            <a href="product.php">
                                                Product Title
                                            </a>
                                        </div>
                                        <div class="card-big-star-price">
                                            <div class="sm-stars" style="--rating: 2.5;"></div>
                                            <div class="card-big-price">2000 GBP</div>
                                        </div>
                                        <div class="card-key-value-wrapper">
                                            <div class="card-key-value-row">
                                                <div class="card-key">Fresheness</div>
                                                <div class="card-value">
                                                    <span class="light-text">New</span>
                                                    <span>(Extra Fresh)</span>
                                                </div>
                                            </div>
                                            <div class="card-key-value-row">
                                                <div class="card-key">Trader</div>
                                                <div class="card-value">
                                                    <span class="">Trader Name</span>
                                                </div>
                                            </div>
                                            <div class="card-key-value-row">
                                                <div class="card-key">Stock</div>
                                                <div class="card-value">
                                                    <span class="light-text">20 kgs</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-big-links">
                                            <div class="card-cart">
                                                <span class="iconify" data-icon="akar-icons:edit" data-inline="false"></span>
                                            </div>
                                            <div class="card-cart">
                                                <span></span>
                                                <span class="iconify" data-icon="ic:baseline-delete-forever" data-inline="false"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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