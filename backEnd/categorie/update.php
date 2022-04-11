<?php
    $p= $_GET['p']; 
    $type= $_GET['type'];
    $con = mysqli_connect('localhost','root','','grh');
    if (!$con) {
      die('Could not connect: ' . mysqli_error($con));
    }
    $requet= "UPDATE categorie SET ".$p." WHERE type=".$type;
    
    mysqli_query($con, $requet);
?>