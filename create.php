<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INUNEKO | CREATE</title>
    <link rel="stylesheet" href="css/home.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="css/style.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" href="./img/icon01.png">
</head>

<body style="background-color: #f9f7f7;">

    <!-- nav -->
    <?php include('nav.php') ?>
    <div class="breadcrumb">
        <ul>
            <li><a href="./home.php">Home</a></li> /
            <li><a href="#" class="active">Create</a></li>
        </ul>
    </div>

    <!-- endnav -->

    <!-- --------------formCreatePost----------------------- -->
    <div class="container">
        <div class="wrapper flex1">
            <div class="header" style="padding-top:70px ;">
                <h2>Create your post</h2>
            </div>
            <div class="error">
                <span id="error" class="s-22"></span>
            </div>
            <div class="col col2 column">
                <form action="./backend/addpost.php" method="POST" enctype="multipart/form-data">
                    <div class="column flex">
                        <input type="text" name="topic" placeholder="Topic" id='topic'>
                        <input type="text" name="animalName" placeholder="Anime's name" id='animalName'>
                        <select name="animalType" id='animalType'>
                            <option value="" hidden>Animal Type</option>
                            <option value="1">Dog</option>
                            <option value="2">Cat</option>
                            <option value="3">Bird</option>
                            <option value="4">Aquatic</option>
                            <option value="5">Exotic</option>
                        </select>
                        <div class="radio">
                            <input type="radio" name="gender" value="male" id="male">
                            <label for="male"><i class="material-icons">male</i>Male</label>
                            <input type="radio" name="gender" value="female" id="female">
                            <label for="female"><i class="material-icons">female</i>Female</label>
                        </div>
                        <div class="input-pic">
                            <span style="margin-top: 20px;"> Select picture (at least 1 picture)</span> <br>
                            <div class="input-group-pic">
                                <label for="pic1" id='picL1'>Picture 1</label>
                                <input type="file" id="pic1" name="pic1" onchange="checkInputPic()">
                                <label for="pic2" id='picL2'>Picture 2</label>
                                <input type="file" id="pic2" name="pic2" onchange="checkInputPic()">
                                <label for="pic3" id='picL3'>Picture 3</label>
                                <input type="file" id="pic3" name="pic3" onchange="checkInputPic()">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col col2 column">
                <input type="text" name="breed" placeholder="Breed" id='breed'>
                <div class="input-group">
                    <input type="text" name="color" placeholder="Color" id='color'>
                    <input type="number" name="age" min="1" placeholder="Age" id='age'>
                </div>
                <div class="input-group">
                    <input type="text" name="province" placeholder="Province" id='province'>
                    <input type="text" name="district" placeholder="District" id='district'>
                </div>
                <textarea name="detail" cols="30" rows="4" placeholder="Detail" id='detail'></textarea>
                <div class="input-group">
                    <button type="reset">Reset</button>
                    <button type="button" onclick="checkPop()">Post</button>
                </div>
            </div>
        </div>
    </div>

    <!-- -------------------pop-up------------------- -->
    <div class="background-pop-up" id="pop-up">
        <div class="pop-up">
            <i class="material-icons md-48">task_alt</i>
            Post successfully
            <button type="submit">View Post</button>
        </div>
    </div>
    </form>

    <!-- ----------------------script----------------------- -->
    <script src="./javascript/function.js"></script>
</body>

</html>