<?php
    $p= $_GET['p']; 
    $numeroC= $_GET['numeroC'];
    $con = mysqli_connect('localhost','root','','grh');
    if (!$con) {
      die('Could not connect: ' . mysqli_error($con));
    }
    $requet= "UPDATE chambre SET ".$p." WHERE numeroC=".$numeroC;
    
    mysqli_query($con, $requet);
?>