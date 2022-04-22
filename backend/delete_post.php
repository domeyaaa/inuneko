<?php 
    include "./connectDB.php";
    $post_id = $_GET['Post_ID'];
    $delete = "DELETE FROM post WHERE Post_ID = $post_id";
    $delete_result = mysqli_query($conn,$delete);
    if ($delete_result){
        header('location:../mypost.php');
    }
?>