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
include "init.php";
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
                            <form class="login-form" action="signup-trader.php" method="POST" >
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
                                            <label for="addressId">Username</label>
                                            <input id="addressId" type="text" name="username" placeholder="Your Username...">
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
                                            <label for="typeId">Product Category</label>
                                            <select name="txtAccess" id="typeId" >
                                      <option value="1" <?php if (isset($_POST['btnSubmit'])){if( $_POST['txtAccess'] == '1') echo 'selected="selected"'; }?>>Bakery</option>
                                      <option value="2" <?php if (isset($_POST['btnSubmit'])) {if( $_POST['txtAccess'] == '2') echo 'selected="selected"'; }?>>Fish</option>
                                      <option value="3" <?php if (isset($_POST['btnSubmit'])){if( $_POST['txtAccess'] == '3') echo 'selected="selected"'; }?>>ReadyTE</option>
                                      <option value="4" <?php if (isset($_POST['btnSubmit'])) {if( $_POST['txtAccess'] == '4') echo 'selected="selected"'; }?>>Grocery</option>
                                      <option value="5" <?php if (isset($_POST['btnSubmit'])){if( $_POST['txtAccess'] == '5') echo 'selected="selected"'; }?>>meat</option>
                                    </select><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-col-2">
                                        <div class="inpt-wrapper">
                                            <label for="emailId">Password</label>
                                            <input id="emailId" type="password" name="password" placeholder="Your password...">
                                        </div>
                                    </div>
                                    <div class="form-col-2">
                                        <div class="inpt-wrapper">
                                            <label for="contactId">Confirm Password</label>
                                            <input id="contactId" type="password" name="password" placeholder="Password again...">
                                        </div>
                                    </div>
                                </div>
                                <div class="inpt-wrapper">
                                    <label for="detailsId">Product Details</label>
                                    <textarea name="details" id="detailsId" placeholder="Decribe your product in few words..."></textarea>
                                </div>


                               

                                <div class="inpt-wrapper">
                                    <input id="termsId" type="checkbox" name="terms" placeholder="Your Password..."> I agree to terms and conditions
                                </div>

                                <div class="login-btn-wrapper">
                                    <input type="submit" name="btnSubmit" value="Register " class = "login-btn">
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
        if(isset($_POST['btnSubmit'])){
            
            $username =$_POST['username'];
            $password = $_POST['password'];
             $fullname =$_POST['fullName'];
            $email =$_POST['email'];
            $contact =$_POST['contact'];
             $details =$_POST['details'];
            $pan =$_POST['pan'];
            $cat =$_POST['txtAccess'];

            $sql = "insert into trader values(trdid_seq.NEXTVAL, '$username', '$password','$fullname','$email',$contact,'$details',$pan,$cat)";
            $query = oci_parse($conn, $sql);
           if($result = oci_execute($query)) {
                echo"values inserted";
           }
        }
        ?>
    <?php
include 'footer.php';
?>

    <script src="js/header.js"></script>
    <script src="js/my-drop-uploader.js"></script>
</body>
</html>