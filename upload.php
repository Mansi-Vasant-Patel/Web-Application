<?php
    session_start();
    $test = $_SESSION['uid'];
    echo $test;

    $br = $_POST['des_name'];
    $desc = $_POST['brief'];


    $conn = new mysqli('localhost', 'root', '', 'project1'); #establishing new connection to database


    $filename = $_FILES["fileToUpload"]["name"];
    $tempname = $_FILES["fileToUpload"]["tmp_name"];
    $folder = "uploads/".$filename;

    move_uploaded_file($tempname,$folder);

    if($filename!="")
    {
        $qry = "INSERT INTO `my_design` (`des_ids`, `design_name`, `design_brief`,`file_name`) VALUES ('$test','$br','$desc','$filename')";

        if(mysqli_query($conn,$qry))
            {
                echo "photo is inserted successfully Successfully";
                header("location: newdesigner_landing_page.php");
            }
        else
            {
                echo mysqli_error($conn);
            }
    }
?>