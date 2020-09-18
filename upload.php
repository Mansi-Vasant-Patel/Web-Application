<?php

session_start();
$test = $_SESSION['uid'];
echo $test;

$br = $_POST['des_name'];
$desc = $_POST['brief'];
//$file=$_POST['fileToUpload'];

$conn = new mysqli('localhost', 'root', '', 'project1');

//echo $_FILES["addtemplate"];
$filename = $_FILES["fileToUpload"]["name"];
$tempname = $_FILES["fileToUpload"]["tmp_name"];
$folder = "uploads/".$filename;
//echo $folder;
move_uploaded_file($tempname,$folder);
//echo "<img src='$folder' height='100' width='100'/>"

if($filename!=""){


$qry = "INSERT INTO `my_design` (`des_ids`, `design_name`, `design_brief`,`file_name`) VALUES ('$test','$br','$desc','$filename')";
//$sql = "INSERT INTO `my_design`(`file_name`) VALUES('$filename')";

if(mysqli_query($conn,$qry))
{
    echo "photo is inserted successfully Successfully";
    header("location: newdesigner_landing_page.php");
}
else
{
    echo mysqli_error($conn);
}}
?>