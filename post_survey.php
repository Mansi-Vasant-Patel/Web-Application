<?php 

session_start(); //to check the session

$test=  $_SESSION['uid'];
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

<style>

.question {
	width: 1000px;
	height: 180px;
	border: 5px solid white;
	background-color: transparent; 
	color: black;
	top: 40%;
	left: 40%;
	position: absolute;
    transform: translate(-50%, -50%);
    box-sizing: border-box;	
	padding: 20px 30px;
	margin-top: 10px;
}

.question1 {
	width: 1000px;
	height: 180px;
	border: 5px solid white;
	background-color: transparent; 
	color: black;
	top: 80%;
	left: 40%;
	position: absolute;
    transform: translate(-50%, -50%);
    box-sizing: border-box;	
	padding: 20px 30px;
	margin-top: 10px;
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
            <button class="nav-link" style="color: #D2DFE0; background-color: #1F6376; border-color: none; border-radius: 10px; padding: 5px 12px; margin-left: 20px;" disabled>Sign up</button>
        </li>
    </ul>

    </div>
</div>
</nav>

<div class="container-fluid">
    <div class="row" style="background-color: #1F6376;">
    <div class="col-sm-12">
                        <h1 style="text-align: center; color: white; padding-left: 200px; padding-top: 50px">Create Survey Form</h1>
                        <form class="form container form-group"  action="int_filter_result.php" method="post">


                    <div class="question form-group" >
		
                        <label style="color: white; font-size: 20px"> Question :</label>
                        <input style="color: white; font-size: 20px; background-color: transparent; border: none; outline: none; border-bottom: 2px solid white;" type="text" name="q1" id="ques" placeholder="Enter design name"><br><br><br>
                        
                        <label style="color: white;font-size: 20px;">Answer :</label>
                        <input style="color: white; font-size: 20px; background-color: transparent; border: none; outline: none; border-bottom: 2px solid white; padding-top: 0px;" type="text" name="ans1" id="desc" placeholder="Add description"><br><br><br>
 		            </div>
			 
		 
                    <div class="question1 form-group" id="add">
                    
                        <label style="color: white; font-size: 20px"> Question :</label>
                        <input style="color: white; font-size: 20px; background-color: transparent; border: none; outline: none; border-bottom: 2px solid white;" type="text" name="q2" id="ques1" placeholder="Enter question here"><br><br><br>
                        
                        <label style="color: white;font-size: 20px;">Answer:</label>
                        <input style="color: white; font-size: 20px; background-color: transparent; border: none; outline: none; border-bottom: 2px solid white; padding-top: 0px;" type="text" name="ans2" id="desc1" placeholder="Add your answer"><br><br><br>
                    </div>
              
        <div class="" id="add" style="color: white; margin-left: 87%; margin-top: 5%;">
                <p style="padding-top: 20px;"> Filter by gender - </p>
                <input type ="checkbox" name="choice_gen[]" value="0">Male</input>
                <input type ="checkbox" name="choice_gen[]" value="1">Female</input>
                <input type ="checkbox" name="choice_gen[]" value="2">others</input><br><br>      
        

            <p>Filter by qualification-</p>
            <select name="choice" >
            <option>10th pass</option>
            <option>12th pass</option>
            <option>Graduation</option>
		    <option>Degree</option>
		    <option>Post-graduation</option>
            </select><br><br>

            <p>Filter by occupation-</p>
		        <select required style="padding-top: 0px;" type="text" name="opt1"  id="op" >
		        <option>Select your option</option>
		        <option>Bussiness</option>
		        <option>Self Employed</option>
		        <option>Student</option>
		        <option>Entrepreneur</option>
		        <option>Free lancer</option>
		        <option>Engineer</option>
		        <option>Designer</option>
		        <option>Teacher</option>
		        <option>Doctor</option>
		        <option>Scientist</option>
		        </select><br><br>
        
        </div>

                        <!--end filters-->
    
                        <button name="search1" style="margin-left: 85%; margin-top: 5%; background-color: white;  color: black; height: 30px; weight: 20%; border-radius: 10px">POST</button>  
                      </form>

    </div>
    </div>
</div>

<body>

</html>