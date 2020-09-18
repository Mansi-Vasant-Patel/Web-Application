<?php
session_start(); //to check the session

$test=  $_SESSION['uid'];
  //echo $test;
global $test;


if(isset($_SESSION['uid'])) //if that variable consists the value...if true then direct it to next page!
{

//header('location:designer_landing_page.php');  ///earlier was header

}

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

        <style>

            .dropbtn {
                background-color: white;
                color: #1F6376;
                font-size: 15px;
                border: none;
                height: 40px;
                width: 90px;
                /*margin-right: 10px;*/
                border-radius: 10px;
                
            }

            .dropbtn1 {
                background-color: white;
                color: #1F6376;
                font-size: 15px;
                border: none;
                height: 40px;
                width: 90px;
                /*margin-right: 10px;*/
                border-radius: 10px;
                
            }

            .dropdown {
                position: relative;
                display: inline-block;
            }

            .dropdown1 {
                position: relative;
                display: inline-block;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: white;
                text-align: center;
                height: 68px;
                width: 140px;
            }

            .dropdown-content1 {
                display: none;
                position: absolute;
                background-color: white;
                text-align: center;
                height: 68px;
                width: 140px;
            }

            .dropdown-content a {
                color: #1F6376;
                padding: 5px 10px;
                text-decoration: none;
                display: block;
                }

            .dropdown-content a:hover {
                background-color: #1F6376;
                color: white;
            }
                
            .dropdown:hover .dropdown-content {
                display: block;
            }
                    
            .dropdown:hover .dropbtn {
                background-color: #141314;
                color: white;
            }

            .dropdown-content1 a {
                color: #1F6376;
                padding: 5px 10px;
                text-decoration: none;
                display: block;
                }

            .dropdown-content1 a:hover {
                background-color: #1F6376;
                color: white;
            }
                
            .dropdown1:hover .dropdown-content1 {
                display: block;
            }
                    
            .dropdown1:hover .dropbtn1 {
                background-color: #141314;
                color: white;
            }
        </style>
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
        <li class="nav-item">
            <button class="nav-link" style="color: #D2DFE0; background-color: #1F6376; border-color: none; border-radius: 10px; padding: 5px 12px; margin-left: 20px;" href="#">Sign up</button>
        </li>
    </ul>

    </div>
</div>
</nav>

<!--End of navigation-->
<div class="container-fluid" >

<div class="row" style="background-color: #1F6376;">
    <div class="col-lg-6 col-md-4 col-sm-2">
        <div class="img-fluid img-responsive d-none d-lg-block">
          <img src="surr.png" style="width: 49vw; height: 92vh; opacity: 90%;">
        </div>
    </div>

    <div class="col-lg-6 col-md-12" style="background-color: #1F6376; width: 676px; height: 604px;">

            <?php

                $conn = mysqli_connect("localhost", "root", "", "project1");
                $query = "SELECT * FROM designer  where des_id = $test";
                $run = mysqli_query($conn, $query);
                $result = mysqli_fetch_assoc($run);
                $name = $result['des_name'];

			?>
        
        <div >
            <div class="img-fluid img-responsive col-lg-12 col-md-6 col-sm-6" style="background-color: white; width: 682p; height: 58px; margin-top: 100px; font-size: 20px; color: #1F6376; text-align: center; padding-top: 10px;">Welcome, <?php echo $name?></div>
        </div>
        
        <div class="row" style="margin-top: 100px;">
        <!--image-->
            <div class ="col-md-6 col-sm-6 image_one">
		    <img style="height: 90px; margin-left: 13vw; background-color: white; border-radius: 10px;" width="90px" src="/website/images/survey.png" alt="search_users">
		    </div>
	
		    <div class ="col-md-6 col-sm-6 image_two">
		    <img style="height: 90px; margin-left: 2.9vw; background-color: white; border-radius: 10px;" width="90px"  src="/website/images/idea.png" alt="surveys">
		    </div>
        
        <!--image-->
        </div>

        <div class="row" style="margin-top: 20px;">
                <div class ="col-lg-6 col-md-6 col-sm-12">
                    <div class="dropdown" style="margin-left: 13vw;">
                    <button class="dropbtn">Surveys</button>
                    <div class="dropdown-content">
                        <a href=http://localhost/website/html1/post_survey.php>Post Survey</a>
                        <a href=http://localhost/website/html/survey_result.php>Survey Results</a>
                    </div>
                    </div>
                </div>
        
                <div class ="col-lg-6 col-md-6 col-sm-6">
                    <div class="dropdown1" style="margin-left: 2.9vw;">
                    <button class="dropbtn1">My Design</button>
                    <div class="dropdown-content1">
                        <a href=http://localhost/website/html1/upload_design.php>Upload Design</a>
                        <a href=http://localhost/website/html/design_history.php>View Designs</a>
                    </div>
                    </div>
                </div>
        </div>
  </div>
  <!--<div class="row" style="background-color: #1F6376; width: 1348px; height:70px;">
  </div>-->
</div>
</div>
</body>

</html>