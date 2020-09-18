<?php
ob_start();

session_start(); //to check the session

if(isset($_SESSION['uid'])) //if that variable consists the value...if true then direct it to next page!
{

header('location: newdesigner_landing_page.php');  ///earlier was header
}
elseif(isset($_SESSION['uid1']))
{
	header('location: newinterviewee_landing_page.php');

}
elseif(isset($_SESSION['uid2']))
{
	header('location: admin_change.php');

}

?>

<!DOCTYPE html>
<html lang="en">
        <head>
                <title>Login</title>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

        </head>

<body style="background-color: #1F6376;">

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
            <a href="http://localhost/website/html1/newlogin.php"><button class="nav-link" style="color: #1F6376; background-color: white; border-color: #1F6376; border-radius: 10px; padding: 5px 12px; margin-left: 20px;" href="#">Log in</button></a>
        </li>
        <li class="nav-item">
            <a href="http://localhost/website/html1/newreg1.php"><button class="nav-link" style="color: #D2DFE0; background-color: #1F6376; border-color: none; border-radius: 10px; padding: 5px 12px; margin-left: 20px;" href="#">Sign up</button></a>
        </li>
    </ul>

    </div>
</div>
</nav>

        <div class="container-fluid" style="background-color: #1F6376;" >
            <div class="row justify-content-center" style="margin-top: 10px;">
                <div class="co-lg-12 col-sm-6 col-md-3">
                    
					<form class="form container form-group" style="font-family: Comic Sans MS; background: white; padding: 30px; border-radius: 10px; box-shadow: 0px 0px 10px 0px #000; height: 550px; width: 330px;" action="newlogin.php" method="post" id="form1">
					<img class="img-fluid" src="/website/images/about me.png" alt="abtme" class="aboutme" style="width: 130px; height: 140px; position: absolute; top: 5%; margin-left: 70px; padding-top: 20px;"/>
                        <div class="form-group" style="padding-top: 160px;">
                            <label for="formGroupExampleInput">Username</label>
                            <input type="text" class="form-control" name="name" id="name1" placeholder="Enter username" value="">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" name="pass" id="pass1" placeholder="Password" value="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Select account category</label>
                            <select name="cat" id="ac" class="form-control" required>
                            <option>Select your option</option>
                              <option>designer</option>
                              <option>Interviewee</option>
                              <option>Admin</option>
                            </select>
                          </div>
						  <input type="submit" value="login" name="Login" onClick="validate()">
                        <small id="passwordHelp" class="form-text text-muted"><a href="#">Forgot password?</a></small>
                      </form>
                    
                </div>
            </div>
        </div>

</body>

</html>

<?php

$conn =  mysqli_connect('localhost','root','','project1');
if ($conn == true){
}

//$test = $_POST['Login'];
//echo $test;
if(isset($_POST['Login']))

{
	
    $username = $_POST['name'];
	$password = $_POST['pass'];
	$category = $_POST['cat'];
	if($_POST['cat']=='designer')
	{

	echo $username;
	echo $password;
	$qry = "SELECT `des_id` FROM `designer` WHERE `des_username` = '$username' AND `des_password` = '$password'";
	//$qry .= "SELECT `int_id` FROM `interviewee` WHERE `int_username` = '$username' AND `int_password` = '$password';";
	//$run = mysqli_multi_query($conn, $qry);
	$run = mysqli_query($conn, $qry);///changes done in 107,106
	//$data = mysqli_fetch_assoc($run);
	$row = mysqli_num_rows($run); ///made different variables for the 2 queries
	//$row1 = mysqli_num_rows($run1);
	//echo $qry;
	//echo $run;
	//echo $row;


    if($row < 1)
    {
        ?>
        <script>
        alert("Invalid credentials");
        window.open('newlogin.php','_self');
		</script>
		<?php
		//echo "start";
		//echo $id;
	
	}
	
	else// ($id = $data['des_id']) /// else tha pehle!
	{
    
        $data = mysqli_fetch_assoc($run);
		$id = $data['des_id'];
		if(!isset($_SESSION)) 
		{ 
			session_start(); 
		}   //starts the new session
		$_SESSION['uid'] =$id; 
		header('location: newdesigner_landing_page.php');
		
		
        
	}
}

elseif($_POST['cat']=='Interviewee')
{
	echo $username;
	echo $password;
	$qry = "SELECT `int_id` FROM `interviewee` WHERE `int_username` = '$username' AND `int_password` = '$password'";
	$run = mysqli_query($conn, $qry);
	$row = mysqli_num_rows($run);

	if($row < 1)
    {
        ?>
        <script>
        alert("Invalid credentials");
        window.open('newlogin.php','_self');
		</script>
		<?php
		//echo "start";
		//echo $id;
	
	}
	
	else// ($id = $data['des_id']) /// else tha pehle!
	{
    
        $data = mysqli_fetch_assoc($run);
		$id = $data['int_id'];
		if(!isset($_SESSION)) 
		{ 
			session_start(); 
		}   ///starts the new session
		$_SESSION['uid1'] =$id; 
		header('location: newinterviewee_landing_page.php');
		ob_enf_fluch();
		
        
	}
}/*
	else /// else tha pehle!
	{
    
        $data1 = mysqli_fetch_assoc($run);
		$id1 = $data1['int_id']; ///changed from des_id
		session_start();   ///starts the new session
		$_SESSION['uid1'] =$id1; ///pehle uid tha!
		header('location: interviewee_landing_page.php');
		
        
  }*/
elseif($_POST['cat']=='Admin')
{
	echo $username;
	echo $password;
	$qry = "SELECT `admin_id` FROM `admin` WHERE `admin_username` = '$username' AND `admin_password` = '$password'";
	$run = mysqli_query($conn, $qry);
	$row = mysqli_num_rows($run);

	if($row < 1)
    {
        ?>
        <script>
        alert("Invalid credentials");
        window.open('newlogin.php','_self');
		</script>
		<?php
		//echo "start";
		//echo $id;
	
	}
	
	else// ($id = $data['des_id']) /// else tha pehle!
	{
    
        $data = mysqli_fetch_assoc($run);
		$id = $data['admin_id'];
		if(!isset($_SESSION)) 
		{ 
			session_start(); 
		}   ///starts the new session
		$_SESSION['uid2'] =$id; 
		header('location: admin_change.php');
		ob_enf_fluch();
		
        
	}
}

}

?> 


