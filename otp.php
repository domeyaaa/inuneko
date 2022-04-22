<?php
session_start();

if(!isset($_COOKIE['otp_ck'])){
    header('location:./forgot.php');
}

$ref = $_COOKIE['ref_ck'];
$otp = $_COOKIE['otp_ck'];

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

<body <?php if (isset($_SESSION['otp_error'])) {
            echo "onload = 'pop()' ";
        }
    ?>
    >
    <form action="./backend/checkotp.php" method="POST">
        <div class="wrapper reg" id="reg1">

            <a href="forgot.php" class="back"><i class="material-icons md-48">navigate_before</i></a>
            <h2 class="topic-h2">A OTP has been sent to your E-mail</h2>
            <h3 class="ref-h3">Ref: <?php echo $ref ?></h3>
            <div class="error">
                <span id="error"></span>
            </div>
            <div class="content">
                <div class="input-group">
                    <input type="text" name="input_otp" placeholder="OTP"> <br>
                    <span class="send-otp" onclick="sendNewOtp()"><i class="material-icons md-24 middle">refresh</i>Send again</span><br>
                    <button type="submit" name="send_email">Next</button>
                </div>
            </div>
        </div>
    </form>
<!-- ---------------------------------------pop-up-------------------------- -->

<div class="background-pop-up" id="pop-up">
        <div class="pop-up">
            <div class="error">
                <span class="error">
                    <?php echo $_SESSION['otp_error'];
                    unset($_SESSION['otp_error']); ?>
                </span>
            </div>
            <button type="button" onclick="closepop()">Try again</button>
        </div>
    </div>

    <script src="./javascript/function.js"></script>
</body>

</html>