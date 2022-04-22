<?php
session_start();
include "./backend/connectDB.php";
$User_ID = $_SESSION['userID'];
$post = "SELECT * FROM post WHERE UserID = $User_ID";
$post_result = mysqli_query($conn, $post);
$numrows = mysqli_num_rows($post_result);
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
    <?php include('nav.php') ?>


    <div class="breadcrumb">
        <ul>
            <li><a href="./home.php">Home</a></li> /
            <li><a href="#" class="active">My post</a></li>
        </ul>
    </div>

    <!-- endnav -->



    <!-- main -->
    <div class="wrapper-mypost">
        <!-- header -->
        <div class="header">
            <h2>My Post</h2>
        </div>

        <!-- container -->
        <div class="container">
            <?php while ($post_row = mysqli_fetch_row($post_result)) {
                $post_id = $post_row[0]; ?>
                <div class="all-box-post">
                    <div class="col-img">
                        <div class="img-post" style="background-image: url('./backend/<?php echo $post_row[12]; ?>');" onclick="goToMyPost('<?php echo $post_id ?>')"></div>
                    </div>
                    <div class="col-detail" onclick="goToMyPost('<?php echo $post_id ?>')">
                        <div class="post-name">
                            <?php echo $post_row[2]; ?>
                        </div>
                        <div class="post-detail">
                            <?php echo $post_row[10]; ?>

                        </div>
                        <div class="post-date">
                            <?php echo $post_row[11]; ?>
                        </div>
                    </div>
                    <div class="col-control">
                        <div class="btn-group">
                            <button class="btnEdit">Edit</button>
                            <button class="btnDel" onclick="window.location='backend/delete_post.php?Post_ID=<?php echo $post_row[0] ?>'">Delete</button>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <script src="./javascript/function.js"></script>
</body>

</html>