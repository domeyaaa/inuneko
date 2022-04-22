<?php
session_start();
include "./connectDB.php";
$post_id = $_GET['Post_ID'];
$userid = $_SESSION['userID'];
$allfav = "SELECT UserID,Post_ID FROM favorite";
$allfav_result = mysqli_query($conn, $allfav);
$addfav = "INSERT INTO favorite(UserID,Post_ID) VALUES ($userid,$post_id)";
$add_result = mysqli_query($conn, $addfav);
$post = "SELECT FavCount FROM post WHERE UserID = $userid AND Post_ID = $post_id";
$post_result = mysqli_query($conn,$post);
$post_row = mysqli_fetch_row($post_result);
$newfav = $post_row[0]+1;
$update = "UPDATE post SET FavCount = $newfav WHERE Post_ID = $post_id";
$update_result = mysqli_query($conn,$update);
if ($add_result){
    header("location:../see_post.php?Post_ID=$post_id");
}else{
    $delete = "DELETE FROM favorite WHERE UserID = $userid AND Post_ID = $post_id";
    $delete_result = mysqli_query($conn,$delete);
    if (!$delete_result){
        echo "<scripteeeeeee>
            alert('failed')
        </scripteeeeeee>";
    }else{
        header("location:../see_post.php?Post_ID=$post_id");
    }
    
}



