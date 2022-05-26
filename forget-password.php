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
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/forgot-password-side-banner.css">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</head>
<body>
    include "header.php"
    <main>
        <div class="max-width-wrapper">
            <div class="login-outer-wrapper">
                <div class="login-wrapper">
                    <div class="login-side-banner">
                    </div>
                    <div class="login-container">
                        <div>
                            <img src="images/clickhuuderfax-name.png" class="login-logo" alt="">
                        </div>
                        <div class="form-wrapper">
                            <form class="login-form" action="#" method="POST" >

                                <div class="inpt-wrapper">
                                    <label for="usernameId">Username</label>
                                    <input id="usernameId" type="text" name="username" placeholder="Your username...">
                                </div>
                                <div class="inpt-wrapper">
                                    <label for="emailId">Email</label>
                                    <input id="emailId" type="email" name="email" placeholder="Your Email...">
                                </div>
                                <div class="login-btn-wrapper">
                                    <button class="login-btn" type="submit">Submit</button>
                                </div>
                            </form>
                            <br>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    include "footer.php"

    <script src="js/header.js"></script>
</body>
</html>