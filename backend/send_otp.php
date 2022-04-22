<?php
session_start();
include('connectDB.php');

$email = $_POST['forgot_email'];
$r_otp = rand(000000, 999999);
$otp = md5($r_otp);

$ref = createRef();

setcookie('ref_ck', $ref, 0, '/');
setcookie('otp_ck', $otp, 0, '/');
setcookie('ref_ck', $ref, time() + 120, '/');
setcookie('otp_ck', $otp, time() + 120, '/');


if (isset($_SESSION['email_forget'])) {
    $email = $_SESSION['email_forget'];
}

$sql = " SELECT Username, Email FROM account WHERE Email = '$email' ";
$qry = mysqli_query($conn, $sql);
$num = mysqli_num_rows($qry);

if ($qry) {
    if ($num > 0) {
        $result = mysqli_fetch_assoc($qry);
        $_SESSION['email_forget'] = $result['Email'];
        $username = $result['Username'];
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        $content = '<html>
        <body>
            <div style="background-color: #f9f7f7; height: 350px; width: 350px; border-radius: 50px;">
                <h2 style="text-align: center;padding: 30px;">Hi '.$username.' </h2>
                <h2 style="text-align: center;">Verification code :</h2>
                <h1 style="text-align: center; padding: 5px;">'.$r_otp.'</h1>
                <p style="text-align: center;">Here is your OTP verification code.</p>
                <p style="text-align: center;">It will expire in 2 minutes.</p>
                <h4 style="text-align: center;">Ref. ' . $ref . '</h4>
            </div>
        </body>
        
        </html>';

        $sendmail = mail($email, 'INUNEKO | Verification', $content, $headers);

        if ($sendmail) {
            header('location:../otp.php');
        }
    } else {
        $_SESSION['email_error'] = 'This e-mail doesn\'t exits.';
        header('location:../forgot.php');
    }
} else {
    $_SESSION['email_error'] = 'This e-mail doesn\'t exits.';
    header('location:../forgot.php');
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
