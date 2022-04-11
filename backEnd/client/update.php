<?php
    $p= $_GET['p']; 
    $cin= $_GET['cin'];
    $con = mysqli_connect('localhost','root','','grh');
    if (!$con) {
      die('Could not connect: ' . mysqli_error($con));
    }
    $requet= "UPDATE client SET ".$p." WHERE CIN=".$cin;
    
    mysqli_query($con, $requet);
?>