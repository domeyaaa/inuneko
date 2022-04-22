    <!-- nav -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <nav class="nav-bar">
        <div class="nav-ct">
            <div class="logo">
                <img src="./img/logo.png" alt="logo" onclick="goToHome()">
            </div>
            <div class="ham">
                <span class="hamBtn" style="font-size: 35px;" onclick="openNav()">&#9776;</span>
            </div>
        </div>
    </nav>

    <!-- endnav -->

    <div class="hamBtn"><span style="font-size: 35px;" onclick="openNav()">&#9776;</span>
    </div>
    <div id="myNav" class="nav-overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&#9776;</a>
        <div class="overlay-content">
            <div class="top-box box-menu">
                <div class="img-profile"></div>
                <span class="username"><?php echo $_SESSION['username'] ?></span>
            </div>
            <div class="middle-box box-menu">
                <a href="profile.php"><i class="fa fa-user">&ThickSpace;</i>Profile</a>
                <a href="./favorite.php"><i class="fa fa-heart"></i>&ThickSpace; Favorite</a>
                <?php
                if ($_SESSION['username'] == 'admin') { ?>
                    <a href="./manage.php"><i class="fa fa-cog"></i>&ThickSpace; Manage</a>
                <?php }
                ?>
            </div>
            <div class="bottom-box box-menu">
                <div class="profile-user logout-box">
                    <span class="logout-btn" onclick="logout()"><i class="fa fa-sign-out"></i>
                        &ThickSpace; Logout
                    </span>
                </div>
            </div>
        </div>
    </div>