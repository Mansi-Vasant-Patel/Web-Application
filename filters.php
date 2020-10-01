<?php

    $conn = mysqli_connect('localhost', 'root', '', 'project1'); #connection to the database
    $qury = "SELECT COUNT(int_id) from interviewee"; #selecting the intervieww with specific ID
    $runn = mysqli_query($conn, $qury);
    $exe = mysqli_fetch_array($runn);
    $ans = $exe[0];

    if(isset($_POST['search']))
    {
        $valueToSearch = $_POST['valueToSearch'];
        // search in all table columns
        // using concat mysql function
        $query = "SELECT * FROM `interviewee` WHERE CONCAT(`int_id`, `int_name`, `int_gen`, `int_occu`) LIKE '%".$valueToSearch."%'";
        $search_result = filterTable($query);
        
    }
    else 
    {
        $query = "SELECT * FROM `interviewee`";
        $search_result = filterTable($query);
    }

    // function to connect and execute the query
    function filterTable($query)
    {
        $connect = mysqli_connect("localhost", "root", "", "project1");
        $filter_Result = mysqli_query($connect, $query);
        return $filter_Result;
    }
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
<h2>The no of interviewee's registered <?php echo $ans?> </h2>

<form action="filters.php" method="POST">
    
    <p> Filter by random search - </p>
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
                    <td><?php echo $row['int_id'];?></td>
                    <td><?php echo $row['int_name'];?></td>
                    <td><?php echo $row['int_gen'];?></td>
                    <td><?php echo $row['int_occu'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
    </form><br><br>

        this part of form is for gender filter -->

        <form action="filters.php" method="POST">
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
    $qry1 = "SELECT COUNT(`int_id`) FROM `interviewee` WHERE `int_gen`='0'";
    $filter_Result1 = mysqli_query($connect, $qry1);
     $row = mysqli_fetch_array($filter_Result1);
     $quantity = $row[0];?><br><?php
     echo ("The number of interviewees are "  .$quantity);
    

}

elseif(isset($_POST['male1']))
{ 
    $connect = mysqli_connect("localhost", "root", "", "project1");
    $qry2 = "SELECT COUNT(`int_id`) FROM `interviewee` WHERE `int_gen`='1'";
    $filter_Result2 = mysqli_query($connect, $qry2);
    $row1 = mysqli_fetch_array( $filter_Result2);
    $quantity=$row1[0];?><br><?php
    echo ("The number of interviewees are "  .$quantity);

}
else
{
    
    $connect = mysqli_connect("localhost", "root", "", "project1");
    
    
    $qry2 = "SELECT COUNT(`int_id`) FROM `interviewee` WHERE `int_gen`='2'";
    $filter_Result3 = mysqli_query($connect, $qry2);
    $row2 = mysqli_fetch_array($filter_Result3);
    $quantity = $row2[0];?><br><?php
    //$row1 = mysqli_fetch_assoc($filter_Result1);
    //$search_result1 = filterGender($qry1);
    echo ("The number of interviewees are "  .$quantity);
}
       }

        ?>
        </form>

        <!-- form for the age-->
        <form action="filters.php" method="POST">
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
                        $qry3 = "SELECT COUNT(`int_id`) FROM `interviewee` WHERE `int_dob` BETWEEN '1999-01-01' AND '2004-12-30'";
                        $filter_Result4 = mysqli_query($connect, $qry3);
                        $rowa = mysqli_fetch_array( $filter_Result4);
                        $quantity=$rowa[0];?><br><?php
                        echo ("The number of interviewees are "  .$quantity);
                    
                        
                    
                    
                }
                elseif(isset($_POST['age2']))
                {
                
                    $connect = mysqli_connect("localhost", "root", "", "project1");
                    $qry3 = "SELECT COUNT(`int_id`) FROM `interviewee` WHERE `int_dob` BETWEEN '1988-01-01' AND '1998-12-30'";
                    $filter_Result5 = mysqli_query($connect, $qry3);
                    $rowb = mysqli_fetch_array( $filter_Result5);
                    $quantity=$rowb[0];?><br><?php
                    echo ("The number of interviewees are "  .$quantity);
                    //$row1 = mysqli_fetch_assoc($filter_Result1);
                    //$search_result1 = filterGender($qry1);
                    
                // echo intval( $filter_Result4); 
                }
                else{
                
                    $connect = mysqli_connect("localhost", "root", "", "project1");
                    $qry3 = "SELECT COUNT(`int_id`) FROM `interviewee` WHERE `int_dob` BETWEEN '1977-01-01' AND '1987-12-30'";
                    $filter_Result6 = mysqli_query($connect, $qry3);
                    $rowc = mysqli_fetch_array( $filter_Result6);
                    $quantity=$rowc[0];?><br><?php
                    echo ("The number of interviewees are "  .$quantity);
                    //$row1 = mysqli_fetch_assoc($filter_Result1);
                    //$search_result1 = filterGender($qry1);
                    
                    //echo intval( $filter_Result4); 
                }
        }
    ?>
        <!--</form>-->
        <!-- filter for accupation -->
        <!--<form action="filters.php" method="POST">-->
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
                $qre = "SELECT COUNT(`int_id`) FROM `interviewee` WHERE `int_edu` LIKE '%".$choice."%'";
                $run = mysqli_query($connect, $qre);
                $store = mysqli_fetch_array($run);
                $st = $store[0];
                echo $st;
                
                
            
            }
        ?>
        
        </form>
</body>
</html>