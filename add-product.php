<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/ClickHudderFax-name.png" type="image/x-icon">
    <title>ClickHudderFax</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="css/drop-uploader.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">
    <link rel="stylesheet" type="text/css" href="css/add-product.css">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</head>
<body>
  <?php
include 'header.php';
?>
    <main>
        <div class="max-width-wrapper">
            <div class="signup-outer-wrapper">
                <div class="signup-wrapper">
                    <div class="signup-container">
                        <div>
                            <img src="images/clickhudder-name.png" class="login-logo" alt="">
                        </div>
                        <div class="form-wrapper">
                            <form class="login-form" action="addaction.php" method="POST" >
                                <div class="form-row">
                                    <div class="form-col-2">
                                        <div class="inpt-wrapper">
                                            <label for="nameId">Product Name</label>
                                            <input id="nameId" type="text" name="name" placeholder="Product Name...">
                                        </div>
                                    </div>
                                    <div class="form-col-2">
                                        <div class="inpt-wrapper">
                                            <label for="categoryId">Product Category</label>
                                            <input id="categoryId" type="text" name="category" placeholder="Product Category...">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-col-2">
                                        <div class="inpt-wrapper">
                                            <label for="quantityId">Quantity</label>
                                            <input id="quantityId" type="text" name="quantity" placeholder="Product Quantity...">
                                        </div>
                                    </div>
                                    <div class="form-col-2">
                                        <div class="inpt-wrapper">
                                            <label for="priceId">Price</label>
                                            <input id="priceId" type="text" name="price" placeholder="Product Price...">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-col-2">
                                        <div class="inpt-wrapper">
                                            <input type="checkbox" name="availability" checked> <span class="grey-text">Availability</span>
                                        </div>
                                    </div>
                                    <div class="form-col-2">
                                        <div class="inpt-wrapper">
                                            <label for="discountId">Discount</label>
                                            <input id="discountId" type="number" name="discount" placeholder="Product discount...">
                                        </div>
                                    </div>
                                </div>
                                <div class="inpt-wrapper">
                                    <label for="detailsId">Product Details</label>
                                    <textarea name="details" id="detailsId" placeholder="Decribe your product in few words..."></textarea>
                                </div>

                                <div class="inpt-wrapper">
                                    <label>Add Images</label>
                                    <div id="drop-area">
                                        <form class="my-form">
                                            <div class="cloud-img-wrapper">
                                                <img class="cloud-upload-img" src="images/cloud-upload.svg" alt="Cloud-upload-icon">
                                            </div>
                                            <div class="drop-tips">
                                                Drop files here or <label for="fileElem" class="browse-files">Browse</label>
                                            </div>
                                            <input type="file" id="fileElem" multiple accept="image/*" onchange="handleFiles(this.files)">
                                        </form>
                                        <div class="progress-wrapper">
                                            <progress id="progress-bar" max=100 value=0></progress>
                                        </div>
                                        <div id="gallery"></div>
                                    </div>
                                </div>

                                <div class="login-btn-wrapper">
                                    <input type="submit" name="btnSubmit" value="Add" class = "login-btn">
                        
                                    <input type="submit" name="btnSubmit" value="Delete" class = "delete-btn">
                                </div>
                            </form>
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
    <script src="js/my-drop-uploader.js"></script>
</body>
</html>