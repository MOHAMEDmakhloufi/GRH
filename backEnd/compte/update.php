<?php
    $p= $_GET['p']; 
    $username= $_GET['username'];
    $con = mysqli_connect('localhost','root','','grh');
    if (!$con) {
      die('Could not connect: ' . mysqli_error($con));
    }
    $requet= "UPDATE compte SET ".$p." WHERE username=".$username;
    
    mysqli_query($con, $requet);
?>