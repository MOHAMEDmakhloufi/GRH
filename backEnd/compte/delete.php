<?php
    $username= $_GET['username']; 
    $con = mysqli_connect('localhost','root','','grh');
    if (!$con) {
      die('Could not connect: ' . mysqli_error($con));
    }
    $requet= "DELETE FROM compte WHERE username = ".$username;
    $result= mysqli_query($con, $requet);
?>