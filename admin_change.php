<?php
session_start(); 
if(isset($_SESSION['uid2'])) 
{

}


$test=  $_SESSION['uid2'];
  //echo $test;
global $test;

?>

<!DOCTYPE html>
<html lang="en">
        <head>
                <title>Bootstrap Example</title>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
                <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
                <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/css/mdb.min.css" rel="stylesheet">
                <script src="reg1.js"></script>
        </head>

<body style="font-family: Comic Sans MS;">

<!--navigation-->
<nav class="navbar navbar-expand-md navbar-light bg-white sticky-top">
<div class="container-fluid">
    <a class="navbar-brand" style="color: #1F6376; font-family: Comic Sans MS; font-weight: bold;" href="http://localhost/website/html1/newhomepage.php">Survey UP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto" style="font-family: Comic Sans MS; font-weight: regular;">
        <li class="nav-item active">
            <a class="nav-link" style="color: #1F6376; margin-left: 20px; background-color: white;" href="http://localhost/website/html1/newhomepage.php">Home</a>
        </li>
        <li class="nav-item">
            <a href="newlogout.php"><button class="nav-link" style="color: #1F6376; background-color: white; border-color: #1F6376; border-radius: 10px; padding: 5px 12px; margin-left: 20px;">Log out</button></a>
        </li>
    </ul>

    </div>
</div>
</nav>

<!--End of navigation-->
<div class="container-fluid" >

<div class="row" style="background-color: #1F6376;">
    <div class="col-lg-6">
        <div class="img-fluid img-responsive d-none d-lg-block">
          <img src="admin.png" style="width: 49vw; height: 92vh; opacity: 90%;">
        </div>
    </div>

    <div class="col-lg-6" style="background-color: #1F6376; width: 103vh; height: 92vh;">

    <?php

        $conn = mysqli_connect("localhost", "root", "", "project1");
        $query = "SELECT * FROM  `admin`  where admin_id = $test";
        $run = mysqli_query($conn, $query);
        $result = mysqli_fetch_assoc($run);
        $name = $result['admin_username'];

    ?>
        
        < <div >
            <div class="img-fluid img-responsive col-lg-12 col-md-6 col-sm-6" style="background-color: white; width: 682p; height: 58px; margin-top: 100px; font-size: 20px; color: #1F6376; text-align: center; padding-top: 10px;">Welcome, <?php echo $name?></div>
        </div>

        <div class="row" style="margin-top: 20px;">
            <form action="filters.php" method ="POST"> <button style="background-color: white; width:150px; height:50px; color: #1F6376; border-radius: 20px; margin-left: 130px; margin-top: 100px; float: left;" type = "submit">INTERVIEWEE FILTERS</button></form>

            <form action="designerfilters.php" method ="POST"> <button style="background-color: white; width: 150px; height:50px; color: #1F6376; border-radius: 20px; margin-left: 100px; margin-top: 100px;" type = "submit">DESIGNER FILTERS</button></form>    
        </div>
  </div>
  <!--<div class="row" style="background-color: #1F6376; width: 1348px; height:70px;">
  </div>-->
</div>
</div>
</body>

</html>
