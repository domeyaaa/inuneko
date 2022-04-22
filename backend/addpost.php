<?php
    session_start();
    date_default_timezone_set("Asia/Bangkok");
    include "./connectDB.php";
    $p_head = $_POST['topic'];
    $p_name = $_POST['animalName'];
    if($p_name == ''){
        $p_name = 'ยังไม่ตั้งชื่อ';
    }
    $p_type = $_POST['animalType'];
    $p_gender = $_POST['gender'];
    $p_age = $_POST['age'];
    $p_breed = $_POST['breed'];
    $p_district = $_POST['district'];
    $p_province = $_POST['province'];
    $p_story = $_POST['detail'];
    $userID = $_SESSION['userID'];
    $p_date = date("d-F-Y");

    $target_dir = "../images/";
    $p_img1 = $target_dir . basename($_FILES["pic1"]["name"]);
    $p_img2 = $target_dir . basename($_FILES["pic2"]["name"]);
    $p_img3 = $target_dir . basename($_FILES["pic3"]["name"]);
    move_uploaded_file($_FILES["pic1"]["tmp_name"], $p_img1);
    move_uploaded_file($_FILES["pic2"]["tmp_name"], $p_img2);
    move_uploaded_file($_FILES["pic3"]["tmp_name"], $p_img3);

    $sql = "INSERT INTO post (UserID,P_head,P_name,Animal_ID,P_sex,P_age,P_breed,P_district,P_province,P_detail,P_date,P_img1,P_img2,P_img3)
    VALUES ($userID,'$p_head','$p_name',$p_type,'$p_gender',$p_age,'$p_breed','$p_district','$p_province','$p_story','$p_date','$p_img1','$p_img2','$p_img3')";
    $result = mysqli_query($conn,$sql);
    if ($result){
        $getID = "SELECT * FROM post WHERE userID = '$userID' ORDER BY Post_ID DESC LIMIT 1";
        $res = mysqli_query($conn,$getID);
        $post_id = mysqli_fetch_row($res);
        header("location:../see_post.php?Post_ID=$post_id[0]");
    }
?>
