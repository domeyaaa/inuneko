<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorite</title>
</head>

<body>

</body>

</html><?php
        session_start();
        include "./backend/connectDB.php";
        $User_ID = $_SESSION['userID'];
        $fav = "SELECT * FROM favorite WHERE UserID=$User_ID";
        $fav_result = mysqli_query($conn, $fav);
        ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/mypost.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" href="./img/icon01.png">
    <title>INUNEKO | NEWS FEED</title>
</head>

<body>

    <!-- nav -->
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

    <div class="breadcrumb">
        <ul>
            <li><a href="./home.php">Home</a></li> / 
            <li><a href="#" class="active">Favorite</a></li>
        </ul>
    </div>

    <!-- endnav -->

    <!-- nav -->
    <span class="hamBtn" style="font-size: 35px;" onclick="openNav()">&#9776;</span>
    <div id="myNav" class="nav-overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&#9776;</a>
        <div class="overlay-content">
            <div class="top-box box-menu">
                <div class="img-profile"></div>
                <span class="username">
                    <?php echo $_SESSION['username'] ?>
                </span>
            </div>
            <div class="middle-box box-menu">
                <a href="#"><i class="fa fa-user">&ThickSpace;</i>Profile</a>
                <a href="#"><i class="fa fa-heart"></i>&ThickSpace; Favorite</a>
            </div>
            <div class="bottom-box box-menu">
                <div class="profile-user logout-box">
                    <span class="logout-btn" onclick="logout()"><i class="fa fa-sign-out"></i>
                        &ThickSpace; Logout</span>
                </div>
            </div>
        </div>
    </div>


    <!-- main -->
    <div class="wrapper-mypost">
        <!-- header -->
        <div class="header">
            <h2>Favorite</h2>
        </div>

        <!-- container -->
        <?php while ($favrow = mysqli_fetch_row($fav_result)) {
            $post = "SELECT * FROM post WHERE Post_ID = $favrow[1]";
            $post_result = mysqli_query($conn,$post);
            while ($rows = mysqli_fetch_row($post_result)){ ?>
            <div class="container" >
                <div class="all-box-post">
                    <div class="col-img">
                        <div class="img-post" style="background-image: url('./backend/<?php echo $rows[12]; ?>');"></div>
                    </div>
                    <div class="col-detail" onclick="">
                        <div class="post-name">
                            <?php echo $rows[2] ?>
                        </div>
                        <div class="post-detail">
                            <?php echo $rows[10] ?>
                        </div>
                        <div class="post-date">
                            <?php echo $rows[11] ?>
                        </div>
                    </div>
                    <div class="col-control">
                        <div class="btn-group">
                            <button class="btnDel" onclick="window.location='backend/delete_fav.php?Post_ID=<?php echo $rows[0]; ?>'">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php }
        } ?>
    </div>

    <script src="./javascript/function.js"></script>
</body>

</html>