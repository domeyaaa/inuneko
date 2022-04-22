<?php
session_start();
include "./connectDB.php";
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM account WHERE Username = '$username' ";
    $qry = mysqli_query($conn, $sql);
    if ($qry) {
        $row = mysqli_fetch_array($qry);
        $password2 = $row['Password'];

        if ($password == $password2) {
            $_SESSION['userID'] = $row['UserID'];
            $_SESSION['username'] = $row['Username'];
            header('location:../home.php');
        } else {
            $_SESSION['login_error'] = "Username or Password is incorrected !!!";
            header('location:../index.php');
        }
    } else {
        $_SESSION['login_error'] = "Username or Password is incorrected !!!";
        header('location:../index.php');
    }
}
