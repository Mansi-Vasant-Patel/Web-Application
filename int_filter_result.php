<?php

$conn = mysqli_connect('localhost', 'root', '', 'project1');

session_start();




$test=  $_SESSION['uid'];
  echo $test;
global $test;


$conn = mysqli_connect('localhost', 'root', '', 'project1');

$q1 = $_POST['q1'];

$q2 = $_POST['q2'];

$edu = $_POST['choice'];

$occu = $_POST['opt1'];

$query = "INSERT INTO survey (question1, question2, des_fk) VALUES('$q1', '$q2', $test)";
echo $query;        
$run = mysqli_query($conn, $query);

$query1 = "SELECT * FROM `survey` WHERE `des_fk`='$test'";
$run3 = mysqli_query($conn, $query1);
$row1 = mysqli_fetch_assoc($run3);
$id=$row1['survey_id'];
echo $id;


$sql = "SELECT int_id FROM `interviewee` WHERE int_edu='$edu' AND int_occu='$occu' AND int_gen IN  (".implode(',', $_POST['choice_gen']).")";
$run = mysqli_query($conn, $sql);
header('location: newdesigner_landing_page.php');
while($row2 = mysqli_fetch_assoc($run))
{
  $result=$row2['int_id'];
  if($result==true)
  {

    $qry = "INSERT INTO ser_int (survey_fk,int_fk) VALUES ('$id','$result') ";
    //$qry = "SELECT * FROM sur_int if "
    $run4 = mysqli_query($conn, $qry);

  } 
  else{
      echo "Not executed";
  } 

}


     

?>