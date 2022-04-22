<?php
session_start();

setcookie('ref_ck', '', 0, '/');
setcookie('otp_ck', '', 0, '/');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="./img/icon01.png">
    <title>INUNEKO | FORGOT PASSWORD</title>
</head>

<body>
    <form action="./backend/newPassword.php" method="POST" onsubmit="return checkNewPassword()">
        <div class="wrapper reg" id="reg1">

            <a href="otp.php" class="back"><i class="material-icons md-48">navigate_before</i></a>
            <h2 class="topic-h2">Create your new password</h2>
            <div class="error">
                <span id="error"></span>
            </div>
            <div class="content">
                <div class="input-group">
                    <input type="password" id="npw1" name="newpassword1" placeholder="New Password"> <br>
                    <input type="password" name="newpassword2" placeholder="Conform New Password" id="npw2"> <br>
                    <button type="submit" name="sendNewPassword">submit</button>
                </div>
            </div>
        </div>
    </form>

    <script src="./javascript/function.js"></script>

</body>

</html>