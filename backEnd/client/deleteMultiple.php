<?php
    $p= $_GET['p']; // p = (cin1, cin2, cin3, ...)
    $con = mysqli_connect('localhost','root','','grh');
    if (!$con) {
      die('Could not connect: ' . mysqli_error($con));
    }
    $requet= "DELETE FROM client WHERE CIN IN ".$p;
    $result= mysqli_query($con, $requet);
?>