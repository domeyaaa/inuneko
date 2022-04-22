 <?php
    session_start();
    include "backend/connectDB.php";

    $sql = "SELECT * FROM post";
    $result = mysqli_query($conn, $sql);

    $type = "SELECT Animal_name FROM animal";
    $tresult = mysqli_query($conn, $type);
    $trows = mysqli_fetch_row($tresult);

    $contact = "SELECT * FROM account";
    $cresult = mysqli_query($conn, $contact);
    $crows = mysqli_fetch_row($cresult);

    $numrows = mysqli_num_rows($result);
    ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="./css/style.css">
     <link rel="stylesheet" href="./css/home.css">
     <link rel="stylesheet" href="./css/newsfeed.css?<?php echo time(); ?>">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="icon" href="./img/icon01.png">
     <title>INUNEKO | NEWS FEED</title>
 </head>

 <body>
     <!-- nav -->
     <?php include('nav.php') ?>
     <div class="breadcrumb">
        <ul>
            <li><a href="./home.php" style="text-decoration: underline;">Home</a></li> /
            <li><a href="#" style="text-decoration: none;cursor: default;">Post</a></li> 
        </ul>
    </div> 
     <!-- endnav -->


     <!-- main -->
     <div class="wrapper-post">
         <!-- header -->
         <div class="header" style="margin-top: 0;">
             <h2>Post</h2>
         </div>
         <!-- container -->
         <div class="container">

             <div class="col-filter">
                 <form action="" method="POST">
                     <div class="filter-box">
                         <div class="header-filter">
                             <h2>Filters</h2>
                         </div>
                         <div class="filter">
                             <label for="animalType-filter">Animal's Type</label>
                             <select name="">
                                 <option value="" hidden id="animalType-filter">select type</option>
                                 <option value="" hidden>Select Animal Type</option>
                                 <option value="1">Dog</option>
                                 <option value="2">Cat</option>
                                 <option value="3">Bird</option>
                                 <option value="4">Aquatic</option>
                                 <option value="5">Exotic</option>
                             </select>
                         </div>
                         <div class="filter">
                             <label for="animalColor-filter">Animal's Colors</label>
                             <select name="animalColor-filter" id="animalColor-filter">
                                 <option value="" hidden>select color</option>
                             </select>
                         </div>

                         <div class="filter">
                             <span>Sex</span>
                             <div class="chk-group">
                                 <input type="checkbox" id="maleFilter">
                                 <label for="maleFilter">Male</label> <br>
                                 <input type="checkbox" id="femaleFilter">
                                 <label for="femaleFilter">Female</label>
                             </div>
                         </div>
                         <div class="filter">
                             <button type="submit" class="filter-btn">Filter</button>
                         </div>
                     </div>
                 </form>
             </div>

             <div class="col-post">
                    <div class="number">Now have <?php echo $numrows ?> Posts</div>
                 <?php while ($rows = mysqli_fetch_row($result)) : ?>
                     <?php $post_id = $rows[0];
                        $user_id = $rows[1];
                        ?>
                     <div class="post">
                         <div class="profile-tab">
                             <div class="profile-img"></div>
                             <div class="profile-detail">
                                 <div class="profile-name profile-hover" onclick="window.location ='user_profile.php?UserID=<?php echo $rows[1] ?>'"><?php echo $crows[1]; ?></div>
                                 <div class="date-post"><?php echo $rows[11]; ?></div>
                             </div>
                         </div>
                         <div class="post-tap post-hover" onclick="goToPost('<?php echo $post_id ?>')">
                             <div class="col-img" style="background-image: url('backend/<?php echo $rows[12] ?>');"></div>
                             <div class="col-detail">
                                 <div class="post-name"><?php echo $rows[2]; ?></div>
                                 <div class="post-detail">
                                     <?php echo $rows[10]; ?>
                                     
                                 </div>
                             </div>
                         </div>
                     </div>
                 <?php endwhile ?>
             </div>

         </div>
     </div>

     <script src="./javascript/function.js"></script>
 </body>

 </html>