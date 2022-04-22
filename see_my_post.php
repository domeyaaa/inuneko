<?php

session_start();

include "backend/connectDB.php";

$post_id = $_GET['Post_ID'];
$sql = "SELECT * FROM post WHERE Post_ID = $post_id";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_row($result);
$type = "SELECT Animal_name FROM animal WHERE Animal_ID = $rows[4]";
$tresult = mysqli_query($conn, $type);
$trows = mysqli_fetch_row($tresult);
$contact = "SELECT Tel,Line_ID FROM account WHERE UserID = $rows[1]";
$cresult = mysqli_query($conn, $contact);
$crows = mysqli_fetch_row($cresult);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/see_post.css?<?php echo time() ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" href="./img/icon01.png">
    <title>INUNEKO | POST</title>

</head>

<body>

    <div class="wrapper column">

        <!-- nav -->
        <?php include('nav.php') ?>


        <div class="breadcrumb">
            <ul>
                <li><a href="./home.php" style="text-decoration: underline;">Home</a></li> /
                <li><a href="./mypost.php" style="text-decoration: underline;">My post</a></li> /
                <li><a href="#" class="active"><?php echo $rows[2] ?></a></li>
            </ul>
        </div>

        <!-- endnav -->

        <h2 class="topic-h02"><?php echo $rows[2] ?></h2><br>
        <div class="wrapper-post">
            <div class="col01">
                <div class="grid-container">
                    <div class="item1" style="background-image: url('backend/<?php echo $rows[12] ?>');"></div>
                    <div class="item2" style="background-image: url('backend/<?php echo $rows[13] ?>');"></div>
                    <div class="item3" style="background-image: url('backend/<?php echo $rows[14] ?>');"></div>
                </div>

                <button class="fav-btn">
                    <i class="fa fa-heart"></i> 1</button>

            </div>

            <div class="col02">
                <div class="ct1">
                    <div class="row">
                        <div class="head">Animal's name</div>
                        <div class="header-ci">: <?php echo $rows[3] ?> </div>
                    </div>
                    <div class="row">
                        <div class="head">Animal's Type</div>
                        <div class="header-ci">: </div>
                    </div>
                    <div class="row">
                        <div class="head">Sex</div>
                        <div class="header-ci">: <?php echo $rows[5] ?></div>
                    </div>
                    <div class="row">
                        <div class="head">Breed</div>
                        <div class="header-ci">: <?php echo $rows[7] ?> </div>
                    </div>
                    <div class="row">
                        <div class="head">Age </div>
                        <div class="header-ci">: <?php echo $rows[6] ?></div>
                    </div>
                    <div class="row">
                        <div class="head">Color </div>
                        <div class="header-ci">: red </div>
                    </div>
                    <div class="row">
                        <div class="head">Contact </div>
                        <div class="header-ci">: <?php echo "$crows[0] <br> $crows[1] <br> $rows[8] <br> $rows[9]"  ?> </div>
                    </div>
                    <div class="row">
                        <div class="head">Detail</div>
                        <div class="header-ci">: <?php echo $rows[10]  ?></div>
                    </div>
                    <div class="row">
                        <div class="head">Date</div>
                        <div class="header-ci">: <?php echo $rows[11]  ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- script -->
    <script src="./javascript/function.js"></script>

</body>

</html>