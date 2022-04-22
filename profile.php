<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/profile.css?<?php echo time() ?>">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

    <!-- nav -->
    <?php include('nav.php') ?>
    <div class="breadcrumb">
        <ul>
            <li><a href="./home.php" style="text-decoration: underline;">Home</a></li> /
            <li><a href="#" style="text-decoration: none;cursor: default;">Profile</a></li> 
        </ul>
    </div>
    <!-- endnav -->
    <form action="">
        <div class="wrapper">

            <div class="header">
                <h2>Profile</h2>
            </div>
            <div class="profile-img">
                <div class="img" style="background-color: #cfcfcf;">Edit</div>
            </div>
            <div class="container">
                <div class="column" style="padding-left: 15%;padding-right: 5%;">
                    <input type="text" name="username" value="xxxxxxxx"> <br>
                    <input type="email" name="email" value="xxxxxxxx"> <br>
                    <input type="password" name="password" value="xxxxxxxxxxx"> <br>
                    <input type="text" name="tel" value="xxxxxxxxxxx">
                </div>
                <div class="column" style="padding-right: 15%;padding-left: 5%;">
                    <select name="province">
                        <option value="" hidden>Select province</option>
                    </select>
                    <select name="district">
                        <option value="" hidden>Select province</option>
                    </select>
                    <input type="text" name="lineID" value="xxxxxxxxxxx"> <br>
                    <div class="radiobtn-group">
                        <div class="radio">
                            <input type="radio" name="gender" value="male" id="male">
                            <label for="male"><i class="material-icons">male</i>Male</label>
                            <input type="radio" name="gender" value="female" id="female">
                            <label for="female"><i class="material-icons">female</i>Female</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-update">
                <button class="btn-update">Update</button>
            </div>

        </div>
    </form>
    <script src="./javascript/function.js"></script>

</body>

</html>