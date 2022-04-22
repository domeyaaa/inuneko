<?php
session_start();
include('connectDB.php');

if (isset($_COOKIE['email']) && isset($_COOKIE['username'])) {

    $email = $_COOKIE['email'];
    $username = $_COOKIE['username'];
    $r_otp = rand(000000, 999999);
    $otp = md5($r_otp);
    $ref = createRef();

    setcookie('reg_ref_ck', $ref, 0, '/');
    setcookie('reg_otp_ck', $otp, 0, '/');
    setcookie('reg_ref_ck', $ref, time() + 120, '/');
    setcookie('reg_otp_ck', $otp, time() + 120, '/');

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    $content = '<html>
        <body>
            <div style="background-color: #f9f7f7; height: 350px; width: 350px; border-radius: 50px;">
                <h2 style="text-align: center;padding: 30px;">Hi ' . $username . ' </h2>
                <h2 style="text-align: center;">Verification code :</h2>
                <h1 style="text-align: center; padding: 5px;">' . $r_otp . '</h1>
                <p style="text-align: center;">Here is your OTP verification code.</p>
                <p style="text-align: center;">It will expire in 2 minutes.</p>
                <h4 style="text-align: center;">Ref. ' . $ref . '</h4>
            </div>
        </body>
        </html>';

    $sendmail = mail($email, 'INUNEKO | Sign Up Verification', $content, $headers);

    if ($sendmail) {
        header('location:../otp_signup.php');
    } else 
    {
        $_SESSION['error_email_signup'] = 'Please Check Your E-mail';
        header('location:../signup.php');
    }
}else{
    header('location:../signup.php');
}


function createRef()
{
    $chars = 'LMTUVWXYZA123490BCDEFGHIJK5678abcdefghijklmnopqrNOPQRSstuvwxyz';
    $ref_arr = array();
    $ref = '';

    for ($i = 0; $i < 6; $i++) {
        $x = rand(1, 62);
        $char = $chars[$x];
        array_push($ref_arr, $char);
    }

    foreach ($ref_arr as $x => $x_value) {
        $ref = $ref . $x_value;
    }

    return $ref;
}
