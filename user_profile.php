<?php
session_start();
include "./backend/connectDB.php";

$UserID = $_GET['UserID'];

$sql = "SELECT * FROM post WHERE UserID = '$UserID'";
$qry = mysqli_query($conn,$sql);

$asql = "SELECT * FROM account WHERE UserID = '$UserID' ";
$aqry = mysqli_query($conn,$asql);
$accresult = mysqli_fetch_assoc($aqry);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/user_profile.css?<?php echo time() ?>">
    <link rel="icon" href="./img/icon01.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>INUNEKO | PROFILE</title>
</head>

<body>
    <!-- nav -->
    <?php include('./nav.php') ?>
    <div class="breadcrumb">
        <ul>
            <li><a href="./home.php" style="text-decoration: underline;">Home</a></li> /
            <li><a href="./feeds.php" style="text-decoration: underline;">Feeds</a></li> /
            <li><a href="#" style="text-decoration: none;cursor: default;"><?php echo 'test' ?></a></li>
        </ul>
    </div>
    <!-- endnav -->

    <div class="wrapper">
        <div class="header">
            <h2 class="topic-h2">Profile</h2>
            <div class="profile-img" style="background-image: url('');"></div>
        </div>
        <div class="main-container">
            <div class="col-profile">
                <h3><?php echo $accresult['Username'] ?></h3>
                <div class="address-box">
                    <span>Tel : <?php echo $accresult['Tel'] ?></span>
                    <span>Line ID : <?php echo $accresult['Line_ID'] ?></span>
                    <span>Distric : <?php echo $accresult['District'] ?></span>
                    <span>Province : <?php echo $accresult['Province'] ?></span>
                </div>
            </div>
            <div class="col-post">
                <h3>Post</h3>
                <div class="number" ></div>
                <?php ?>
                <div class="all-box-post">
                    <div class="col-img">
                        <div class="img-post" style="background-image: url(' ');"></div>
                    </div>
                    <div class="col-detail">
                        <div class="post-name">
                            <h4>$TOPIC</h4>
                        </div>
                        <div class="post-detail">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti fugiat inventore illo dolor modi ad accusamus molestias eligendi dolorem officiis voluptates adipisci, possimus consectetur laudantium. Optio quibusdam inventore dolores voluptatem fuga adipisci modi corrupti nisi excepturi tempora ipsa similique, possimus dicta totam tenetur suscipit necessitatibus maxime distinctio doloremque nesciunt ipsum!
                        </div>
                        <div class="post-date">
                            2020
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="./javascript/function.js"></script>
</body>

</html>