<?php
include('./connectDB.php');
session_start();

$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password1']);
$gender = $_POST['gender'];
$tel = $_POST['tel'];
$lineID = $_POST['lineID'];
$district = $_POST['district'];
$province = $_POST['province'];

setcookie('username', $username, time() + 120, '/');
setcookie('email', $email, time() + 120, '/');
setcookie('password', $password, time() + 120, '/');
setcookie('gender', $gender, time() + 120, '/');
setcookie('tel', $tel, time() + 120, '/');
setcookie('lineID', $lineID, time() + 120, '/');
setcookie('district', $district, time() + 120, '/');
setcookie('province', $province, time() + 120, '/');


$usercount = 0;
$emailcount = 0;

$check = "SELECT * FROM account";
$recheck = mysqli_query($conn, $check);
while ($rwcheck = mysqli_fetch_row($recheck)) {
    if ($username == $rwcheck[1]) {
        $_SESSION['uerror'] = "username is exist";
        $usercount++;
    }
    if ($email == $rwcheck[2]) {
        $_SESSION['eerror'] = "e-mail is exist";
        $emailcount++;
    }
}

if ($usercount > 0 || $emailcount > 0) {
    header('location:../signup.php');
} 
else {
    header('location:./send_signup_otp.php');
}

?>