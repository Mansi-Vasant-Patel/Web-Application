<?php

session_start();
session_destroy();

if(isset($_SESSION['uid']))
{
    header('location: newhomepage.php');
}

if(isset($_SESSION['uid1']))
{
    header('location: newhomepage.php');
}

if(isset($_SESSION['uid2']))
{
    header('location: newhomepage.php');
}

?>