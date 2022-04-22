<?php
session_start();

if (isset($_POST['input_otp'])) {

    $input_otp = MD5($_POST['input_otp']);

    if (isset($_COOKIE['reg_otp_ck']) && isset($_COOKIE['reg_ref_ck'])) {
        $otp = $_COOKIE['reg_otp_ck'];
        $ref = $_COOKIE['reg_ref_ck'];

        if ($input_otp == $otp && $_COOKIE['reg_ref_ck'] == $ref) {
            header('location:./adduser.php');
        } 
        else {
            $_SESSION['reg_otp_error'] = 'Verification failed';
            header('location:../otp_signup.php');
        }
    } 
    else {
        $_SESSION['reg_otp_error'] = 'Verification failed';
        header('location:../otp_signup.php');
    }
}

?>