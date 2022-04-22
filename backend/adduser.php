<?php
session_start();
include "./connectDB.php";

$username = $_COOKIE['username'];
$email = $_COOKIE['email'];
$password = $_COOKIE['password'];
$gender = $_COOKIE['gender'];
$tel = $_COOKIE['tel'];
$lineID = $_COOKIE['lineID'];
$district = $_COOKIE['district'];
$province = $_COOKIE['province'];

$sql = "INSERT INTO account (Username,Email,Password,Gender,District,Province,Tel,Line_ID) VALUES
        ('$username','$email','$password','$gender','$district','$province','$tel','$lineID')";
$result = mysqli_query($conn, $sql);
if ($result) {
    header('location:../index.php');
} else {
    header('location:../signup.php');
}

