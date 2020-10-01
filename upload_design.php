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

<div class="container-fluid" style="background-color: #1F6376; height: 600px">
<div class="row justify-content-center" style="margin-top: 10px;">
                <div class="col-12 col-sm-6 col-md-3">
                    <form class="form container form-group" style="font-family: Comic Sans MS; background: white; padding: 30px; border-radius: 10px; box-shadow: 0px 0px 10px 0px #000; height: 450px; width: 400px; margin-left: 0%; margin-top: 80px;" method="POST" id="register" action="upload.php" enctype="multipart/form-data">
                        
                    <div class="form-group" >
		
                        <label style="color: #1F6376; font-size: 20px"> Design Name:</label>
                        <input style="color: white; font-size: 20px; background-color: transparent; border: none; outline: none; border-bottom: 2px solid #1F6376;" type="text" name="des_name" id="name" placeholder="Enter design name"><br><br>
                        
                    </div>

                    <div class="form-group" >
		
                        <label style="color: #1F6376; font-size: 20px"> Design Brief:</label>
                        <textarea style="border-color: #1F6376; border-width: 3px" name ="brief" rows="5" cols="35"> </textarea><br><br>
                        <input type="file" name="fileToUpload" id="fileToupload"/>
                    </div>
    
                    

                    <input class="btn btn-primary" style="margin-left: 120px; margin-top: 0px;" type="submit" name="submit" value="POST"/>

                    </form>
                    
                </div>
</div>
</div>

</body>
</html>
