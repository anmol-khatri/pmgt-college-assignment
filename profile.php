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
    <link rel="stylesheet" type="text/css" href="css/profile.css">
    <link rel="stylesheet" type="text/css" href="css/max-width-wrapper-customer-profile.css">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</head>
<body>
  <?php
    include 'init.php';
    include 'header.php';

?>
    <main>
        <?php 
           $id=  $_SESSION['usrid'] ;
           $sql = "select * from customer where cust_id= $id";
           $query_usr = oci_parse($conn, $sql);
            $result = oci_execute($query_usr);
            if ($row = oci_fetch_assoc($query_usr)){
                
               $username = $row['USERNAME'];
               $fullname = $row['USR_FULL_NAME'];
               $email = $row['USR_EMAIL'];
               $phone = $row['USR_PHONE'];
               echo "$username, $fullname, $email, $phone";
            }
            else{
                header('location:addshop.php');
            }
        ?>
        <div class="max-width-wrapper">
            <div class="profile-outer-wrapper">
                <div class="profile-wrapper">
                   <div class="profile-heading">
                       Customer Profile
                   </div>
                   <div class="profile-container">
                       <div class="user-icon-wrapper">
                           <img class="user-icon-img" src="images/placeholder-image.png" alt="User-profile-icon">
                       </div>
                       <div class="profile-form-wrapper">
                            <form class="profile-form" action="profile.php" method="POST" >
                                <div class="form-row">
                                    <div class="form-col-2">
                                        <div class="inpt-wrapper">
                                            <label for="fullNameId">Full Name</label>
                                            <input id="fullNameId" type="text" name="fullName" placeholder="Your Name..." value="<?php echo "$fullname"?>" >
                                        </div>
                                    </div>
                                    <div class="form-col-2">
                                        <div class="inpt-wrapper">
                                            <label for="addressId">Username</label>
                                            <input id="addressId" type="text" name="username" placeholder="Your username..." value="<?php echo "$username"?>" >
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-col-2">
                                        <div class="inpt-wrapper">
                                            <label for="emailId">Email</label>
                                            <input id="emailId" type="email" name="email" placeholder="Your Email..." value="<?php echo "$email"?>">
                                        </div>
                                    </div>
                                    <div class="form-col-2">
                                        <div class="inpt-wrapper">
                                            <label for="contactId">Contact</label>
                                            <input id="contactId" type="text" name="contact" placeholder="Your Contact..." value="<?php echo "$phone"?>">
                                        </div>
                                    </div>
                                </div>
                                
                            </form>
                       </div>
                       
                   </div>
                   <div class="profile-btn-wrapper">
                    <input type="submit" name="btnSubmit" class="edit-prfl-btn" value="Edit profile">
                    <button>Change Password</button>
                </div>
                </div>
            </div>
        </div>
    </main>
    <?php
include 'footer.php';
?>

    <script src="js/header.js"></script>
</body>
</html>