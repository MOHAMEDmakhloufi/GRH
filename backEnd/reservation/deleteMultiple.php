<?php
    $p= $_GET['p']; //?p=(778)
    $con = mysqli_connect('localhost','root','','grh');
    if (!$con) {
      die('Could not connect: ' . mysqli_error($con));
    }
    $requet= "DELETE FROM reservation WHERE numeroR IN ".$p;
    $result= mysqli_query($con, $requet);
?>