<?php

session_start();
include('./backend/connectDB.php');

$sql = "SELECT * FROM post ORDER BY P_date ASC";
$qry = mysqli_query($conn, $sql);




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
    <title>INUNEKO | MANAGE POSTS</title>
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



    <!-- nav -->
    <?php include('./nav.php'); ?>

    <div class="breadcrumb">
        <ul>
            <li><a href="./manage.php">Manage</a></li> /
            <li><a href="#" class="active">Manage Posts</a></li>
        </ul>
    </div>

    <!-- main -->
    <div class="wrapper-mypost">
        <!-- header -->
        <div class="header">
            <h2>Manage Posts</h2>
        </div>

        <!-- container -->
        <div class="container">
        <?php while($rows = mysqli_fetch_assoc($qry)) : ?>
            <div class="all-box-post">
                <div class="col-img">
                    <div class="img-post" style="background-image: url(' ');"></div>
                </div>
                <div class="col-detail">
                    <div class="post-name">
                        <?php echo $rows['P_head'] ?>
                    </div>
                    <div class="post-detail">
                        <?php echo $rows['P_detail']?>
                    </div>
                    <div class="post-date">
                        <?php echo $rows['P_date']?>
                    </div>
                </div>
                <div class="col-control">
                    <div class="btn-group">
                        <button class="btnDel" onclick="window.location='' ">Delete</button>
                    </div>
                </div>
            
            </div>
            <?php endwhile ?>
        </div>
    </div>

    <script src="./javascript/function.js"></script>
</body>

</html>