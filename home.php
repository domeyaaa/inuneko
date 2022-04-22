<?php

session_start();
setcookie('test', 'testuser', time() + 60);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/main.css?<?php echo time() ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="icon" href="./img/icon01.png">
    <title>INUNEKO | HOME</title>
</head>

<body>
    <?php include('nav.php') ?>


    <div class="wrapper wrapper2">
        <div class="header">
            <h2>Home</h2>
        </div>
        <div class="all-box">
            <div class="box" onclick="linkTo('create')">
                <i class="fa fa-plus-circle"></i>
                <span>Create</span>
            </div>
            <div class="box" onclick="linkTo('feeds')">
                <i class="fa fa-file"></i>
                <span>Feeds</span>
            </div>
            <div class="box" onclick="linkTo('mypost')">
                <i class="fa fa-folder-open"></i>
                <span>My Post</span>
            </div>
        </div>
    </div>
    <script src="./javascript/function.js"></script>
</body>

</html>