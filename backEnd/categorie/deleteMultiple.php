<?php
    $p= $_GET['p']; 
    $con = mysqli_connect('localhost','root','','grh');
    if (!$con) {
      die('Could not connect: ' . mysqli_error($con));
    }
    $requet= "DELETE FROM categorie WHERE type IN ".$p;
    $result= mysqli_query($con, $requet);
?>