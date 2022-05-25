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
    <link rel="stylesheet" type="text/css" href="css/signup.css">
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
                    <div class="signup-trader-side-banner">
                    </div>
                    <div class="signup-container">
                        <div>
                            <img src="images/clickhudder-name.png" class="login-logo" alt="">
                        </div>

                        <div class="form-wrapper">
                            <form class="login-form" action="#" method="POST" >
                              <div>
                                <a href="signup.php" class="note-link-under">SIGNUP AS CUSTOMER</a>
                            </div>
                            <br>
                            <Span>--------------------------------SIGNUP PAGE FOR TRADER--------------------------------</Span>
                                <div class="form-row">
                                    <div class="form-col-2">
                                        <div class="inpt-wrapper">
                                            <label for="fullNameId">Full Name</label>
                                            <input id="fullNameId" type="text" name="fullName" placeholder="Your Name...">
                                        </div>
                                    </div>
                                    <div class="form-col-2">
                                        <div class="inpt-wrapper">
                                            <label for="addressId">Address</label>
                                            <input id="addressId" type="text" name="address" placeholder="Your Address...">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-col-2">
                                        <div class="inpt-wrapper">
                                            <label for="emailId">Email</label>
                                            <input id="emailId" type="email" name="email" placeholder="Your Email...">
                                        </div>
                                    </div>
                                    <div class="form-col-2">
                                        <div class="inpt-wrapper">
                                            <label for="contactId">Contact</label>
                                            <input id="contactId" type="text" name="contact" placeholder="Your Contact...">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-col-2">
                                        <div class="inpt-wrapper">
                                            <label for="pan">PAN</label>
                                            <input id="pan" type="number" name="pan" placeholder="Your PAN...">
                                        </div>
                                    </div>
                                    <div class="form-col-2">
                                        <div class="inpt-wrapper">
                                            <label for="typeId">Product Type</label>
                                            <input id="typeId" type="text" name="type" placeholder="Your product type...">
                                        </div>
                                    </div>
                                </div>
                                <div class="inpt-wrapper">
                                    <label for="detailsId">Product Details</label>
                                    <textarea name="details" id="detailsId" placeholder="Decribe your product in few words..."></textarea>
                                </div>

                                <div class="inpt-wrapper">
                                    <label >Documents</label>
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

                               

                                <div class="inpt-wrapper">
                                    <input id="termsId" type="checkbox" name="terms" placeholder="Your Password..."> I agree to terms and conditions
                                </div>

                                <div class="login-btn-wrapper">
                                    <button class="login-btn" type="submit">Signup</button>
                                </div>
                            </form>
                            <div class="login-footer space-btwn">
                                <div>
                                    <span>Already a user? </span>
                                    <a href="login.php" class="note-link-under">Login</a>
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
    <script src="js/my-drop-uploader.js"></script>
</body>
</html>