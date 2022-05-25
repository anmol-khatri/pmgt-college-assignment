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
    <link rel="stylesheet" type="text/css" href="css/max-width-wrapper-cusomer-profile.css">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</head>
<body>
  <?php
include 'header.php';
?>
    <main>
        <div class="max-width-wrapper">
            <div class="profile-outer-wrapper">
                <div class="profile-wrapper">
                   <div class="profile-heading">
                       Trader Profile
                   </div>
                   <div class="profile-container">
                       <div class="user-icon-wrapper">
                           <img class="user-icon-img" src="images/placeholder-image.png" alt="User-profile-icon">
                       </div>
                       <div class="profile-form-wrapper">
                            <form class="profile-form" action="#" method="POST" >
                                <div class="form-row">
                                    <div class="form-col-2">
                                        <div class="inpt-wrapper">
                                            <label for="fullNameId">Full Name</label>
                                            <input id="fullNameId" type="text" name="fullName" placeholder="Your Name..." value="Cristiano Ronaldo" >
                                        </div>
                                    </div>
                                    <div class="form-col-2">
                                        <div class="inpt-wrapper">
                                            <label for="addressId">Address</label>
                                            <input id="addressId" type="text" name="address" placeholder="Your Address..." value="ClekHudderFax" >
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-col-2">
                                        <div class="inpt-wrapper">
                                            <label for="emailId">Email</label>
                                            <input id="emailId" type="email" name="email" placeholder="Your Email..." value="clickhudderfax@gmail.com">
                                        </div>
                                    </div>
                                    <div class="form-col-2">
                                        <div class="inpt-wrapper">
                                            <label for="contactId">Contact</label>
                                            <input id="contactId" type="text" name="contact" placeholder="Your Contact..." value="+449980283498">
                                        </div>
                                    </div>
                                </div>
                                
                            </form>
                       </div>
                       
                   </div>
                   <div class="profile-btn-wrapper">
                    <button class="edit-prfl-btn" >Edit Profile</button>
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