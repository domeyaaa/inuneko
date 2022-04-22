<?php
session_start();

unset($_SESSION['email_forget']);
setcookie('username', '', 0, '/');
setcookie('email', '', 0, '/');
setcookie('password', '', 0, '/');
setcookie('gender', '', 0, '/');
setcookie('tel', '', 0, '/');
setcookie('lineID', '', 0, '/');
setcookie('district', '', 0, '/');
setcookie('province', '', 0, '/');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INUNEKO | SIGN UP</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/signup.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="./img/icon01.png">
</head>

<body>
    <form action="backend/setcookie_signup.php" method="POST">
        <div class="wrapper reg" id="reg1">
            <a href="index.php" class="back"><i class="material-icons md-48">navigate_before</i></a>
            <h2 class="topic-h2">Create your account</h2>
            <div class="error">
                <span id="error">

                    <?php
                    if (isset($_SESSION['uerror'])) {
                        echo $_SESSION['uerror'];
                    }
                    if (isset($_SESSION['uerror']) && isset($_SESSION['eerror'])) {
                        echo ' and ';
                    }
                    if (isset($_SESSION['eerror'])) {
                        echo $_SESSION['eerror'];
                    }
                    unset($_SESSION['uerror']);
                    unset($_SESSION['eerror']);
                    ?>

                </span>
            </div>
            <div class="content">
                <div class="input-group">

                    <input type="text" name="username" placeholder="Username" id="username"> <br>
                    <input type="email" name="email" placeholder="E-mail" id="email"> <br>
                    <input type="password" name="password1" id="pw1" placeholder="Password"> <br>
                    <input type="password" name="password2" id="pw2" placeholder="Confirm Password"> <br>
                    <div class="radiobtn-group">
                        <div class="radio">
                            <input type="radio" name="gender" value="male" id="male">
                            <label for="male"><i class="material-icons">male</i>Male</label>
                            <input type="radio" name="gender" value="female" id="female">
                            <label for="female"><i class="material-icons">female</i>Female</label>
                        </div>
                    </div> <br>
                    <button type="button" name="signupBtn" onclick="checkForm('reg2')">Next</button>
                </div>
            </div>
        </div>

        <!-- ----------------------------------------------------------------------- -->

        <div class="wrapper reg" id="reg2" style="display: none;">
            <a onclick="backNav('reg1')" class="back"><i class="material-icons md-48">navigate_before</i></a>
            <h2 class="topic-h2">Create your account</h2>
            <div class="error">
                <span id="error"></span>
            </div>
            <div class="content">
                <div class="input-group">
                    <input type="text" name="tel" placeholder="Phone Number"> <br>
                    <input type="text" name="lineID" placeholder="Line ID"> <br>
                    <input type="text" name="district" placeholder="District"> <br>
                    <input type="text" name="province" placeholder="Province"> <br>
                    <button type="submit" name="signupBtn">Sign Up</button>
                </div>
            </div>
        </div>
    </form>

    <script src="./javascript/function.js"></script>
</body>

</html>