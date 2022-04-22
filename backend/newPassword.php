<?php
    include "./connectDB.php";
    session_start();
    $email = $_SESSION['email_forget'];
    $newpass2 = md5($_POST['newpassword2']);

    $sql = "UPDATE account set Password = '$newpass2' WHERE Email = '$email' ";
    $qry = mysqli_query($conn, $sql);
    if($qry){
        header('location:../index.php');
    }
    else{
        header('location:../createNewPassword.php');
    }
?>