<?php include "init.php";?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
  <!-- BOX ICONS CSS-->
  <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</head>
<body>

<header>
    <nav>
        <div id="menu" class="menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="logo-wrapper">
          <a href="index.php">
                <img class="logo-img" src="images/ClickHudderFax-name.png" alt="ClickHudderFax-logo">
            </a>
        </div>
        <div class="search-box-wrapper">
            <form class="search-form" action="search.php" method="POST">
                <div class="search-categories">
                    <select class="category-select" name="searchBy">
                        <option value="0">All Product Types</option>
                        <option value="1">Bakery</option>
                        <option value="2">Fish</option>
                        <option value="3">Ready To Eat</option>
                        <option value="4">Grocery</option>
                        <option value="5">Meat</option>
                    </select>
                    <span class="iconify select-arrow" data-icon="ic:round-keyboard-arrow-down" data-inline="false"></span>
                </div>
                <div class="inp-select-line"></div>
                <input class="search-inpt" name="q" type="text" placeholder="Search Products, categories...">
                <input type="submit" class="search-btn" name="btnSubmit" value="Search">
            </form>
        </div>
        <div class="cart-account-wrapper">
            <div class="cart-account-item account-nav-link">
                <span class="iconify account" data-icon="line-md:account" data-inline="false"></span>
                <span class="cart-icon-title">
                    <?php if (isset($_SESSION['role'])) {
                        echo "Welcome ". $_SESSION['role'];}
                        
                        else{
                             echo"Hello, Sign in<br>Account & Lists";
                        }
                       ?></span>
                <span class="iconify down-arrow" data-icon="ant-design:caret-down-outlined" data-inline="false"></span>
                <div class="account-nav-links">
                    <a href='index.php'>
                        <span class='iconify' data-icon='clarity:login-line' data-inline='false'></span>
                        <span>Home</span>
                    </a>
                    <?php if (!isset($_SESSION['role'])) {

                    echo"<a href='login.php'>
                        <span class='iconify' data-icon='clarity:login-line' data-inline='false'></span>
                        <span>Login</span>
                    </a>";}?>
                    <?php if (!isset($_SESSION['role'])) {

                    echo"<a href='signup.php'>
                        <span class='iconify' data-icon='line-md:account-add' data-inline='false'></span>
                        <span>Sign up</span>
                    </a>";}
                    ?>

                    <?php if (isset($_SESSION['role']) &&($_SESSION['role']=="customer")) {

                    echo "<a href='profile.php'>
                        <span class='iconify' data-icon='line-md:account' data-inline='false'></span>
                        <span>Your Account</span>
                    </a>";}?>
                    <?php if (isset($_SESSION['role']) &&($_SESSION['role']=="trader")) {

                    echo"<a href='profile-trader.php'>
                      <span class='iconify' data-icon='line-md:account' data-inline='false'></span>
                      <span>Trader Account</span>
                  </a>";}?>
                  <?php if (isset($_SESSION['role'])) {

                    echo"<a href='#''>
                        <span class='iconify' data-icon='la:box' data-inline='false'></span>
                        <span>Orders</span>
                    </a>";}?>

                    <?php if (isset($_SESSION['role']) &&($_SESSION['role']=="customer")) {
                    echo"<a href='#''>
                        <span class='iconify' data-icon='bi:suit-heart' data-inline='false'></span>
                        <span>Wishlist</span>
                    </a>";}?>

                     <?php if (isset($_SESSION['role']) &&($_SESSION['role']=="trader")) {

                    echo"<a href='manage-product.php'>
                      <span class='iconify' data-icon='line-md:account' data-inline='false'></span>
                      <span>Products</span>
                  </a>";}?>

                    <?php if (isset($_SESSION['role'])) {
                    echo"<a href='logout.php'>
                        <span class='iconify' data-icon='carbon:logout' data-inline='false'></span>
                        <span>Logout</span>
                    </a>";}?>
                </div>
            </div>

            <?php if (isset($_SESSION['role']) &&($_SESSION['role']=="customer")) {
                    echo"<div class='cart-acc-separ'></div>
            <a href='cart.php' class='cart-account-item'>
                <span class='cart-icon-wrapper'>
                    <span class='iconify' data-icon='bx:bx-basket' data-inline='false'></span>
                    <span class='cart-count'>10</span>
                </span>
                <span class='cart-icon-title'>Cart</span>
            </a>";}?>
        </div>
        <div class="cart-search-wrapper">
            <div id="mbl-search" class="cart-account-item">
                <span class="iconify account" data-icon="bi:search" data-inline="false"></span>
            </div>
            <a href="cart.php" class="cart-account-item  ml-5">
                <span class="cart-icon-wrapper">
                    <span class="iconify" data-icon="bx:bx-basket" data-inline="false"></span>
                    <span class="cart-count">5</span>
                </span>
            </a>
        </div>
    </nav>
    
    <div id="mbl-search-container" class="mbl-search-container"></div>
</header>
<script type="js/changepassword.js"></script>
</body>
</html>