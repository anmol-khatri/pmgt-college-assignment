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
        <?php
        if($_SESSION['shpid']!="null"){
            $shpname=$_SESSION['shpname'];
       echo"<h1>Your shop name is $shpname</h1>";
    }
    else{

    }
        ?>
        <form method="POST" action="add-product.php">
            
        </form>
        <div class="max-width-wrapper">
            <div class="signup-outer-wrapper">
                <div class="signup-wrapper">
                    <div class="signup-container">
                        <div>
                            <img src="images/clickhudderfax-name.png" class="login-logo" alt="h">
                        </div>
                        <div class="form-wrapper">
                            <form class="login-form" action="add-product.php" method="POST" >
                                <div class="form-row">
                                    <div class="form-col-2">
                                        <div class="inpt-wrapper">
                                            <label for="nameId">Product Name</label>
                                            <input id="nameId" type="text" name="name" placeholder="Product Name...">
                                        </div>
                                    </div>
                                    <div class="form-col-2">
                                        <div class="inpt-wrapper">
                                            <label for="categoryId">Product Price</label>
                                            <input id="categoryId" type="number" name="price" placeholder="Product Price...">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-col-2">
                                        <div class="inpt-wrapper">
                                            <label for="quantityId">Quantity</label>
                                            <input id="quantityId" type="number" name="quantity" placeholder="Product Quantity...">
                                        </div>
                                    </div>
                                    <div class="form-col-2">
                                        <div class="inpt-wrapper">
                                            <label for="priceId">Stock</label>
                                            <input id="priceId" type="number" name="stock" placeholder="Product Stock...">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-col-2">
                                        <div class="inpt-wrapper">
                                            <label for="discountId">Min Order</label>
                                            <input id="discountId" type="number" name="minOrder" placeholder="Product Min Order...">
                                        </div>
                                    </div>
                                    <div class="form-col-2">
                                        <div class="inpt-wrapper">
                                            <label for="discountId">Max Order</label>
                                            <input id="discountId" type="number" name="maxOrder" placeholder="Product Max Order...">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-col-2">
                                        <div class="inpt-wrapper">
                                            <label for="discountId">Allergy Info</label>
                                            <input id="discountId" type="text" name="allergy" placeholder="Product Allergy Info...">
                                        </div>
                                    </div>
                                    <div class="form-col-2">
                                        <div class="inpt-wrapper">
                                            <label for="discountId">Category</label>
                                            <select name="category" id="typeId" >
                                              <option value="1" <?php if (isset($_POST['btnSubmit'])){if( $_POST['category'] == '1') echo 'selected="selected"'; }?>>Bakery</option>
                                              <option value="2" <?php if (isset($_POST['btnSubmit'])) {if( $_POST['category'] == '2') echo 'selected="selected"'; }?>>Fish</option>
                                              <option value="3" <?php if (isset($_POST['btnSubmit'])){if( $_POST['category'] == '3') echo 'selected="selected"'; }?>>ReadyTE</option>
                                              <option value="4" <?php if (isset($_POST['btnSubmit'])) {if( $_POST['category'] == '4') echo 'selected="selected"'; }?>>Grocery</option>
                                              <option value="5" <?php if (isset($_POST['btnSubmit'])){if( $_POST['category'] == '5') echo 'selected="selected"'; }?>>meat</option>
                                            </select><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="inpt-wrapper">
                                    <label for="detailsId">Product Details</label>
                                    <textarea name="details" id="detailsId" placeholder="Decribe your product in few words..."></textarea>
                                </div>

                                <div class="login-btn-wrapper">
                                    <input type="submit" name="btnSubmit" value="Add" class = "login-btn">
                        
                                    <input type="submit" name="btnDelete" value="Delete" class = "delete-btn">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <?php
            if(isset($_POST['btnSubmit'])){
                $name = $_POST['name'];
                $details = $_POST['details'];
                $price = $_POST['price'];
                $quantity = $_POST['quantity'];
                $stock = $_POST['stock'];
                $minord = $_POST['minOrder'];
                $maxord = $_POST['maxOrder'];
                $allergy = $_POST['allergy'];
                $cat = $_POST['category'];
                $shp = $_SESSION['shpid'];


                $sql = "insert into product values(prdid_seq.NEXTVAL, '$name','$details',$price,$quantity,$stock, $minord, $maxord, '$allergy', $cat, $shp)";
                
                //run query and store result
                $query_add = oci_parse($conn, $sql);
                
                if ($result = oci_execute($query_add)){
                    echo"added values";
                //     $_SESSION['user'] = $user;
                //     header ('location:./index.php');

                }
                else{
                    echo "false";   
                } 
            }

?>

    </main>
<?php
include 'footer.php';
?>

    <script src="js/header.js"></script>
    <script src="js/my-drop-uploader.js"></script>
</body>
</html>