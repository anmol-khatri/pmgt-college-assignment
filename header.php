<header>
    <nav>
        <div id="menu" class="menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="logo-wrapper">
          <a href="/index.php">
                <img class="logo-img" src="images/ClickHudderFax-name.png" alt="ClickHudderFax-logo">
            </a>
        </div>
        <div class="search-box-wrapper">
            <form class="search-form" action="search.php" method="get">
                <div class="search-categories">
                    <select class="category-select" name="searchBy">
                        <option value="">All categories</option>
                        <option value="">Meat</option>
                        <option value="">Veg</option>
                        <option value="">Fish</option>
                    </select>
                    <span class="iconify select-arrow" data-icon="ic:round-keyboard-arrow-down" data-inline="false"></span>
                </div>
                <div class="inp-select-line"></div>
                <div class="search-input-wrapper">
                    <input class="search-inpt" name="q" type="text" placeholder="Search Products, categories...">
                </div>
                <button class="search-btn" type="submit">
                    <span class="iconify" data-icon="la:search" data-inline="false"></span>
                </button>
            </form>
        </div>
        <div class="cart-account-wrapper">
            <div class="cart-account-item account-nav-link">
                <span class="iconify account" data-icon="line-md:account" data-inline="false"></span>
                <span class="cart-icon-title">Hello, Sign in<br>Account & Lists</span>
                <span class="iconify down-arrow" data-icon="ant-design:caret-down-outlined" data-inline="false"></span>
                <div class="account-nav-links">
                    <a href="login.php">
                        <span class="iconify" data-icon="clarity:login-line" data-inline="false"></span>
                        <span>Login</span>
                    </a>
                    <a href="signup.php">
                        <span class="iconify" data-icon="line-md:account-add" data-inline="false"></span>
                        <span>Sign up</span>
                    </a>
                    <a href="profile.php">
                        <span class="iconify" data-icon="line-md:account" data-inline="false"></span>
                        <span>Your Account</span>
                    </a>
                    <a href="profile-trader.php">
                      <span class="iconify" data-icon="line-md:account" data-inline="false"></span>
                      <span>Trader Account</span>
                  </a>
                    <a href="#">
                        <span class="iconify" data-icon="la:box" data-inline="false"></span>
                        <span>Orders</span>
                    </a>
                    <a href="#">
                        <span class="iconify" data-icon="bi:suit-heart" data-inline="false"></span>
                        <span>Wishlist</span>
                    </a>
                    <a href="#">
                        <span class="iconify" data-icon="carbon:logout" data-inline="false"></span>
                        <span>Logout</span>
                    </a>
                </div>
            </div>
            <div class="cart-acc-separ"></div>
            <a href="cart.php" class="cart-account-item">
                <span class="cart-icon-wrapper">
                    <span class="iconify" data-icon="bx:bx-basket" data-inline="false"></span>
                    <span class="cart-count">10</span>
                </span>
                <span class="cart-icon-title">Cart</span>
            </a>
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
    <div id="overlay"></div>
    <div id="menu-container" class="menu-container">
            <div class="menu-content">
                <a class="menu-link" href="index.php">
                    <span>Home</span>
                    <span class="iconify menu-link-icon" data-icon="ant-design:home-outlined" data-inline="false"></span>
                </a>
                <a class="menu-link" href="profile.php">
                    <span>Account</span>
                    <span class="iconify menu-link-icon" data-icon="line-md:account" data-inline="false"></span>
                </a>
                <a class="menu-link" href="">
                    <span>Notifications</span>
                    <span class="iconify menu-link-icon" data-icon="ic:baseline-notifications-none" data-inline="false"></span>
                </a>
                <a class="menu-link" href="login.php">
                    <span>Login</span>
                    <span class="iconify menu-link-icon" data-icon="clarity:login-line" data-inline="false"></span>
                </a>
                <a class="menu-link" href="signup.php">
                    <span>Sign up</span>
                    <span class="iconify menu-link-icon" data-icon="line-md:account-add" data-inline="false"></span>
                </a>
            </div>
        </div>
    <div id="mbl-search-container" class="mbl-search-container"></div>
</header>