<?php

session_start();
unset($_SESSION['email_forget']);
?>
    
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="icon" href="./img/icon01.png">

    <title>INUEKO | LOGIN</title>

</head>

<body 
<?php 
    if(isset($_SESSION['login_error'])){
        echo "onload = 'togglePopup()' ";
    }
?> 
>
    <div class="container">
        <div class="wrapper">
            <div class="col">
                <div class="logo">
                    <img src="img/logo.png" alt="logo-inuneko">
                </div>
            </div>
            <div class="col column">
                <div class="welcome-detail">
                    <span class="bold header-detail">Meet cat and dog friends</span> <br>
                    <span class="pg">INUNEKO, a website to find a home for gogs and cats to have a happy home Let's find
                        a home for pets.</span>
                </div>
                <div class="box-btn">
                    <button class="btn-login " onclick="togglePopup()">Let's get started</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ---------------------------------POP-UP----------------------------------------- -->

    <div class="popup" id="popup-1" >
        <div class="overlay" ></div>
        <div class="content" >
            <div class="close-btn" onclick="togglePopup()">X</div>
            <div class="header">
                <div class="sub_logo">
                    <img src="img/logo.png" alt="logo">
                </div>
            </div>
            <form action="./backend/check_login.php" method="POST" onsubmit="return checkLogin()">
                <div class="error">
                    <span id="error">
                        <?php
                        if (isset($_SESSION['login_error'])) {
                            echo $_SESSION['login_error'];
                            unset($_SESSION['login_error']);
                        }
                        ?>
                    </span>
                </div>
                <div class="input-group">
                    <input type="text" name="username" placeholder="Username" autocomplete="off"
                    id="username"> <br>
                    <input type="password" name="password" placeholder="Password" autocomplete="off" id="password"> <br>
                    <button type="submit" name="login_user" >Login</button>
                    <a href="./forgot.php" class="forgot-btn">Forgot Password</a>
                </div>
            </form>
            <a href="./signup.php"><button name="signupBtn">Sign Up</button></a>
        </div>
    </div>

    <script src="./javascript/function.js"></script>

</body>

</html>