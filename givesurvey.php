<?php

session_start();

$test=  $_SESSION['uid1'];
global $test;

$conn = mysqli_connect("localhost", "root", "", "project1");

  //$sql = "SELECT * FROM survey where int_ids = '$test'";
  $sql = "SELECT * FROM ser_int si, survey s where si.survey_fk = s.survey_id and int_fk = '$test'";
  $run = mysqli_query($conn, $sql);
  $result = mysqli_fetch_assoc($run);

  $q1 = $result['question1'];
  //echo $q1;
  
  
  $q2 = $result['question2'];
  //echo $q2;

	  
  if(isset($_POST['search1']))	
	{
	 	$a1 = $_POST['desc1'];
	  	//echo $a1;
  
	  	$a2 = $_POST['desc2'];
	  	//echo $a2;
  
	    $conn = mysqli_connect("localhost", "root", "", "project1");
	  
		$query = "UPDATE ser_int set answer1 = '$a1' , answer2 = '$a2' where int_fk = '$test'";
		//echo $query;
	  	$run = mysqli_query($conn, $query);
		$result = mysqli_fetch_assoc($run);
  
		$a1 = $result['answer1'];
		//echo $a1;
	
		  $a2 = $result['answer2'];
		  
		header("location: newinterviewee_landing_page.php");
	  	//echo $a2;
  
	}


?>

<!DOCTYPE html>
<html lang="en">
        <head>
                <title>Give Survey</title>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
                <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
                <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/css/mdb.min.css" rel="stylesheet">

                <script>

                    function validate_answer()
                    {

                        var answer1 = document.getElementById("desc").value;
                        var answer2 = document.getElementById("desc1").value;

                        if(answer1 == null || answer1 == "")
                        {
                            alert("Answer 1 is empty. Please enter your answer");
                            return false;
                            document.getElementById("desc").focus;
                        }

                        else if(answer2 == null || answer2 == "")
                        {
                            alert("Answer 2 is empty. Please enter your answer");
                            return false;
                            document.getElementById("desc1").focus;
                        }

                        else if(answer1.length<30)
                        {
                            alert("Answer1 must have a minimum of 30 characters");
                            return false;
                            document.getElementById("desc").focus;
                        }

                        else if(answer2.length<30)
                        {
                            alert("Answer2 must have a minimum of 30 characters");
                            return false;
                            document.getElementById("desc1").focus;
                        }

                    }

                </script>

        <style>

.question {
	width: 800px;
	height: 150px;
	border: 5px solid white;
	background-color: transparent; 
	color: black;
	top: 30%;
	left: 15%;
	position: absolute;
    box-sizing: border-box;	
	padding: 20px 30px;
	margin-top: 10px;
}

.question1 {
	width: 800px;
	height: 150px;
	border: 5px solid white;
	background-color: transparent; 
	color: black;
	top: 60%;
	left: 15%;
	position: absolute;
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
    <div class="col-sm-3" style="background-color: #D2DFE0; height: 600px;  width: 100px; color: #1F6376; padding-top: 20px;">
         Select survey to fill from available surveys (Dashboard)
    </div>
    <div class="col-sm-7">
                        <h1 style="text-align: center; color: white; padding-left: 200px; padding-top: 50px">Fill out survey</h1>
                        <form class="form container form-group"  action="givesurvey.php" method="post" id="register" onsubmit="return validate_answer();">
                        <div class="form-group question" style="padding-top: 0px;">
                            <label style="color: white; font-size: 20px"> Question : <?php echo $q1?></label><br>
                            <!--<input style="color: white; font-size: 20px; background-color: transparent; border: none; outline: none; border-bottom: 2px solid white;" type="text" name="q1" id="ques" placeholder="Enter design name"><br><br><br>-->
                            
                            <label style="color: white;font-size: 20px;">Answer :</label><br>
                            <textarea style="background: transparent; border-bottom: 2px solid white; color:  white; font-size: 15px;" name="desc1" id="desc" cols="70" rows="2"></textarea>
                        </div>
                        <div class="form-group question1" style="padding-top: 0px;">
                            <label style="color: white; font-size: 20px"> Question : <?php echo $q2?></label><br>
                            <!--<input style="color: white; font-size: 20px; background-color: transparent; border: none; outline: none; border-bottom: 2px solid white;" type="text" name="q2" id="ques1" placeholder="Enter question here"><br><br><br>-->
                            
                            <label style="color: white;font-size: 20px;">Answer:</label><br>
                            <textarea style="background: transparent; border-bottom: 2px solid white; color:  white; font-size: 15px;" name="desc2" id="desc1" cols="70" rows="2"></textarea>
                        </div>
    
                        <button name="search1" style="margin-left: 85%; margin-top: 74%; background-color: white;  color: black; height: 30px; weight: 20%; border-radius: 10px">POST</button>  
                      </form>

    </div>
    </div>
</div>

<body>

</html>