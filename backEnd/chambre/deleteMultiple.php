<?php
    $p= $_GET['p'];
    $con = mysqli_connect('localhost','root','','grh');
    if (!$con) {
      die('Could not connect: ' . mysqli_error($con));
    }
    $requet= "DELETE FROM chambre WHERE numeroC IN ".$p;
    $result= mysqli_query($con, $requet);
?>