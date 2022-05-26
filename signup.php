<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/ClickHudderFax-name.png" type="image/x-icon">
    <title>ClickHudderFax</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">
    <link rel="stylesheet" type="text/css" href="css/signup.css">
    <link rel="stylesheet" type="text/css" href="css/max-width-wrapper--signup-customer.css">
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
                    <div class="signup-side-banner">
                    </div>
                    <div class="signup-container">
                        <div>
                            <img src="images/click-name.png" class="login-logo" alt="">
                        </div>
                        <div class="form-wrapper">
                            <form class="login-form" action="signup.php" method="POST" >
                                <div>
                                    <a href="signup-trader.php" class="note-link-under">SIGNUP AS TRADER</a>
                                </div>
                                <br>
                                <Span>--------------------------------SIGNUP PAGE FOR CUSTOMER--------------------------------</Span>
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
                                            <label for="passwordId">Password</label>
                                            <input id="passwordId" type="password" name="password" placeholder="Your Password...">
                                        </div>
                                    </div>
                                    <div class="form-col-2">
                                        <div class="inpt-wrapper">
                                            <label for="confPassId">Confirm Password</label>
                                            <input id="confPassId" type="password" name="confPass" placeholder="Confirm your password...">
                                        </div>
                                    </div>
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
         <?php
        if(isset($_POST['btnSubmit'])){
            
            $username =$_POST['username'];
            $password = $_POST['password'];
             $fullname =$_POST['fullName'];
            $email =$_POST['email'];
            $contact =$_POST['contact'];

            $sql = "insert into customer values(custid_seq.NEXTVAL, '$username', '$password','$fullname','$email',$contact)";
            echo $sql;
            $query = oci_parse($conn, $sql);
           if($result = oci_execute($query)) {
                echo"values inserted";
           }
        }
        ?>
    </main>
    <?php
include 'footer.php';
?>
    <script src="js/header.js"></script>
</body>
</html>