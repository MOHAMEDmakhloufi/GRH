<?php
    $p= $_GET['p']; 
    $numeroC= $_GET['numeroC'];
    $con = mysqli_connect('localhost','root','','grh');
    if (!$con) {
      die('Could not connect: ' . mysqli_error($con));
    }
    $requet= "INSERT INTO chambre(`numeroC`, `type`) VALUES ".$p;
    
    mysqli_query($con, $requet);
    $requet2=  "SELECT * FROM chambre WHERE numeroC=".$numeroC;
    $result= mysqli_query($con, $requet2);

    $ligne = mysqli_fetch_array($result);
        
        echo $ligne['numeroC'].",";
        echo $ligne['type'].",";
    
?>