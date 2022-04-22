<?php
session_start();

if (isset($_POST['input_otp'])) {

    $input_otp = $_POST['input_otp'];
    $input_otp = md5($input_otp);

    if (isset($_COOKIE['otp_ck']) && isset($_COOKIE['ref_ck'])) {
        $otp = $_COOKIE['otp_ck'];
        $ref = $_COOKIE['ref_ck'];
        if ($input_otp == $otp && $_COOKIE['ref_ck'] == $ref) {
            header('location:../createNewPassword.php');
        } 
        else {
            $_SESSION['otp_error'] = 'Verification failed';
            header('location:../otp.php');
        }
    } 
    else {
        header('location:../otp.php');
    }
}

?>