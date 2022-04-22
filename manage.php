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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css?<?php echo time() ?>">

    <link rel="icon" href="./img/icon01.png">
    <title>INUNEKO | HOME</title>
</head>

<body>
    <!-- nav -->
    <?php include('./nav.php') ?>
    <!-- endnav -->


    </div>

    <div class="wrapper wrapper2">
        <div class="header">
            <h2>Manage</h2>
        </div>
        <div class="all-box">
            <div class="box" onclick="linkTo('manage-account')">
                <span style="text-align: center;line-height: 33px;">Manage<br>Account
                </span>
            </div>
            <div class="box" onclick="linkTo('manage-post')">
                <span style="text-align: center;line-height: 33px;">Manage<br>Post</span>
            </div>
        </div>
    </div>
    <script src="./javascript/function.js"></script>
</body>

</html>