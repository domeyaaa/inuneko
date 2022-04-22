<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "inuneko";
    $conn = mysqli_connect($host,$user,$password,$database);
    if(!$conn) {
        echo "เกิดข้อผิดพลาดในการเชื่อมต่อฐานข้อมูล <br>";
        exit;
    }
    mysqli_set_charset($conn,"utf-8");
?>