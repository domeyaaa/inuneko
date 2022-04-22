<?php 
    session_start();
    include "./connectDB.php";
    $post_id = $_GET['Post_ID'];
    $user_id = $_SESSION['userID'];
    $delete = "DELETE FROM favorite WHERE Post_ID = $post_id AND UserID = $user_id";
    $delete_reuslt = mysqli_query($conn,$delete);
    if ($delete_reuslt){
        header('location:../favorite.php');
    }
?>