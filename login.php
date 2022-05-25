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
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</head>
<body>
<?php

include 'init.php';
include 'header.php';
?>
    <main>
        <div class="max-width-wrapper">
            <div class="login-outer-wrapper">
                <div class="login-wrapper">
                    <div class="login-side-banner">
                    </div>
                    <div class="login-container">
                        <div class="form-wrapper">
                            <form class="login-form" action="login.php" method="POST" >
                                <div class="inpt-wrapper">
                                    <label>Login as: </label>
                                    <select name="txtAccess" id="cars" >
                                      <option value="customer" <?php if (isset($_POST['btnSubmit'])){if( $_POST['txtAccess'] == 'customer') echo 'selected="selected"'; }?>>Customer</option>
                                      <option value="trader" <?php if (isset($_POST['btnSubmit'])) {if( $_POST['txtAccess'] == 'trader') echo 'selected="selected"'; }?>>Trader</option>
                                    </select><br>
                                </div>
                                <div class="inpt-wrapper">
                                    <label for="userId">Username</label>
                                    <input id="userId" type="text" name="txtUser" placeholder="Your username...">
                                </div>
                                <?php if (isset($_POST['btnSubmit'])) {
                                        if(empty($_POST['txtUser'])){
                                    echo "<i>*Username must not be empty</i>";}
                                }?><br>
                                <div class="inpt-wrapper">
                                    <label for="passwordId">Password</label>
                                    <input id="passwordId" type="password" name="txtPass" placeholder="Your password...">
                                </div>
                                <?php if (isset($_POST['btnSubmit'])) {
                                        if(empty($_POST['txtPass'])){
                                    echo "<i>*Password field must not be empty</i>";}
                                }?><br>
                                <div class="note-links-wrapper">
                                    <a href="#" class="note-link">
                                        Forgot password?
                                    </a>
                                </div>
                                <div class="login-btn-wrapper">
                                    <input type="submit" name="btnSubmit" value="Login" class = "login-btn">
                                </div>
                            </form>
                            <div class="login-footer">
                                <span>New Customer? </span>
                                <a href="/signup.php" class="note-link-under">Create Account</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
//Gather details submitted from the $_POST array and store in local vars
if(isset($_POST['btnSubmit'])){
    $user = $_POST['txtUser'];
$pass = $_POST['txtPass'];
$access = $_POST['txtAccess'];
//build query to SELECT records from the users table WHERE
//the username AND password in the table are equal to those entered.
if ($access == "customer") {

$sql = "select username, password from customer where username = '$user' and password = '$pass'";
}
if ($access == "trader") {

$sql = "select username, password from trader where username = '$user' and password = '$pass'";
}
//run query and store result
$query_login = oci_parse($conn, $sql);
$result = oci_execute($query_login);
if ($row = oci_fetch_assoc($query_login)){
    $_SESSION['user'] = $user;
    header ('location:./index.php');

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
</body>
</html>