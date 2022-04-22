<?php session_start();
include('./backend/connectDB.php');
$sql = "SELECT * FROM account ";
$qry = mysqli_query($conn, $sql);
$num = mysqli_num_rows($qry);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css?<?php echo time() ?>">
    <link rel="stylesheet" href="./css/manage.css?<?php echo time() ?>">
    <title>Document</title>
    <script src="./javascript/function.js"></script>
</head>

<body>
    <!-- nav -->
    <?php include('nav.php') ?>
    <div class="breadcrumb">
        <ul>
            <li><a href="./manage.php" style="text-decoration: underline;">Manage</a></li> /
            <li><a href="#" style="text-decoration: none;cursor: default;">Manage Accounts</a></li>
        </ul>
    </div>
    <!-- main -->
    <div class="wrapper">
        <div class="container">
            <div class="search-group">
                <div class="col-left">
                    <span>จำนวน <?php echo $num ?> Accounts</span>
                </div>
                <div class="col-right">
                    <input type="text" placeholder="Search" name="search" class="search">
                </div>
            </div>
            <div class="wrapper-list">
                <?php while ($rows = mysqli_fetch_assoc($qry)) : ?>
                    <div class="user-box">
                        <div class="col-m">
                            <div class="img-profile"></div>
                            <span><?php echo $rows['Username'] ?></span>
                        </div>
                        <div class="col-m" style="justify-content: center;">
                            <span>UID : <?php echo $rows['UserID'] ?></span>
                        </div>
                        <div class="col-lr">
                            <?php if ($rows['Username'] != 'admin') : ?>
                                <button name="del-account" onclick="openpop()">Delete</button>
                            <?php endif ?>
                        </div>

                    </div>
                <?php endwhile ?>
            </div>
        </div>
    </div>


    <!-- pop -->

    <div class="pop-up-confirm" id="overay-confirm">
    </div>
    <div class="box-pop-up" id="box-pop-up">
        <div class="topic">Delete Account</div>
        <div class="content">
            Are you sure if you delete this account, it connot be restored.
        </div>
        <div class="btn-group">
            <button name="btn-cancel" onclick="cancelpop()">Cancel</button>
            <button name="btn-delete" onclick="">Delete</button>
        </div>
    </div>
</body>

</html>