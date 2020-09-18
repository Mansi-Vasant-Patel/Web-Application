<?php

$connect = mysqli_connect("localhost", "root", "", "project1");
/*$qry = "SELECT COUNT(int_id) from `interviewee`";
$run = mysqli_query($connect,$qry);
$run1 = mysqli_fetch_array($run);
$quantity = $run1[0];*/

$qry = "SELECT COUNT(des_id) from `designer`";
$run1 = mysqli_query($connect,$qry);
$run2 = mysqli_fetch_array($run1);
$quantity1 = $run2[0];




if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `designer` WHERE CONCAT(`des_id`, `des_name`, `des_gen`, `des_occu`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
else {
    $query = "SELECT * FROM `designer`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "project1");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}






// function to connect and execute the query


?>


<!doctype html>
<html>
<head>
<title>html data table search</title>

<style>
            table,tr,th,td
            {
                border: 1px solid pink;
            }
        </style>
</head>
<body color:white>

<p><b>Number of registered designers are <?php echo $quantity1; ?></b></p>
<form action="designerfilters.php" method="POST">
    
    <p> Filter by random search - Designers</p>
    <input type ="text" name="valueToSearch" placeholder="value to search"></input><br><br>
    <input type="submit" name="search" value="Random Search"/><br><br>

    <table>
    <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Occupation</th>
    </tr>
    <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['des_id'];?></td>
                    <td><?php echo $row['des_name'];?></td>
                    <td><?php echo $row['des_gen'];?></td>
                    <td><?php echo $row['des_occu'];?></td>
                </tr>
                <?php endwhile;?>
            </table>

        <form action="designerfilters.php" method="POST">
            <p> Filter by gender - </p>
                <input type ="radio" name="male" id="m1">Male</input>
                <input type ="radio" name="male1" id="m2">Female</input>
                <input type ="radio" name="male2" id="m3">others</input>
                <input type="submit" name="search1" value="Search"/><br>
        

       <?php
       if(isset($_POST['search1']))
       {

       
       
if(isset($_POST['male']))
{
    $connect = mysqli_connect("localhost", "root", "", "project1");
    $qry1 = "SELECT COUNT(`des_id`) FROM `designer` WHERE `des_gen`='0'";
    $filter_Result1 = mysqli_query($connect, $qry1);
     $row = mysqli_fetch_array($filter_Result1);
     $quantity = $row[0];?><br><?php
     echo ("The number of designers are "  .$quantity);
    //$search_result1 =(int)$row1->getValue();
    //return $search_result1;
    //echo $search_result1;
    
    //echo intval( $quantity);
    

}
elseif(isset($_POST['male1']))
{ 
    $connect = mysqli_connect("localhost", "root", "", "project1");
    $qry2 = "SELECT COUNT(`des_id`) FROM `designer` WHERE `des_gen`='1'";
    $filter_Result2 = mysqli_query($connect, $qry2);
    $row1 = mysqli_fetch_array( $filter_Result2);
    $quantity=$row1[0];?><br><?php
    echo ("The number of designers are "  .$quantity);

}
else{
    
    $connect = mysqli_connect("localhost", "root", "", "project1");
    
    
    $qry2 = "SELECT COUNT(`des_id`) FROM `designer` WHERE `des_gen`='o'";
    $filter_Result3 = mysqli_query($connect, $qry2);
    $row2 = mysqli_fetch_array($filter_Result3);
    $quantity = $row2[0];?><br><?php
    //$row1 = mysqli_fetch_assoc($filter_Result1);
    //$search_result1 = filterGender($qry1);
    echo ("The number of designers are "  .$quantity);
}
       }

        ?>
        </form>

        <!-- form for the age-->
        <form action="designerfilters.php" method="POST">
            <p> Filter by age - </p>
                <input type ="radio" name="age1" id="a1">15-20 yrs</input>
                <input type ="radio" name="age2" id="a2">21-30 yrs</input>
                <input type ="radio" name="age3" id="a3">31-40 yrs</input>
                <input type="submit" name="search2" value="Search"/><br>

            <?php
            if(isset($_POST['search2']))
            {
            if(isset($_POST['age1']))
            {
                
                    $connect = mysqli_connect("localhost", "root", "", "project1");
                    $qry3 = "SELECT COUNT(`des_id`) FROM `designer` WHERE `des_dob` BETWEEN '1999-01-01' AND '2004-12-30'";
                    $filter_Result4 = mysqli_query($connect, $qry3);
                    $rowa = mysqli_fetch_array( $filter_Result4);
                    $quantity=$rowa[0];?><br><?php
                    echo ("The number of designers are "  .$quantity);
                   
                    
                
                
            }
            elseif(isset($_POST['age2']))
            {
               
                $connect = mysqli_connect("localhost", "root", "", "project1");
                $qry3 = "SELECT COUNT(`des_id`) FROM `designer` WHERE `des_dob` BETWEEN '1988-01-01' AND '1998-12-30'";
                $filter_Result5 = mysqli_query($connect, $qry3);
                $rowb = mysqli_fetch_array( $filter_Result5);
                $quantity=$rowb[0];?><br><?php
                echo ("The number of designers are "  .$quantity);
                //$row1 = mysqli_fetch_assoc($filter_Result1);
                //$search_result1 = filterGender($qry1);
                
               // echo intval( $filter_Result4); 
            }
            else{
               
                $connect = mysqli_connect("localhost", "root", "", "project1");
                $qry3 = "SELECT COUNT(`des_id`) FROM `designer` WHERE `des_dob` BETWEEN '1977-01-01' AND '1987-12-30'";
                $filter_Result6 = mysqli_query($connect, $qry3);
                $rowc = mysqli_fetch_array( $filter_Result6);
                $quantity=$rowc[0];?><br><?php
                echo ("The number of designers are "  .$quantity);
                //$row1 = mysqli_fetch_assoc($filter_Result1);
                //$search_result1 = filterGender($qry1);
                
                //echo intval( $filter_Result4); 
            }
        }
            ?>
        <!--</form>-->
        <!-- filter for accupation -->
        <!--<form action="designerfilters.php" method="POST">-->
        <p>Filter by qualification-</p>
        <select name="choice">
        <option>10th pass</option>
        <option>12th pass</option>
        <option>Graduation</option>
		<option>Degree</option>
		<option>Post-graduation</option>
        </select>
        <input type="submit" name="search5" value="Search"/><br>
        <?php
        if(isset($_POST['search5']))
        {
            $choice = $_POST['choice'];
            $connect = mysqli_connect("localhost", "root", "", "project1");
            $qre = "SELECT COUNT(`des_id`) FROM `designer` WHERE `des_edu` LIKE '%".$choice."%'";
            $run = mysqli_query($connect, $qre);
            $store = mysqli_fetch_array($run);
            $st = $store[0];
            echo $st;
            
            
           
        }
                ?>
        
        </form>
</body>
</html>