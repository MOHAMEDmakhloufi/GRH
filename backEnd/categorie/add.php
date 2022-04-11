<?php
    $p= $_GET['p']; 
    $type= $_GET['type'];
    $con = mysqli_connect('localhost','root','','grh');
    if (!$con) {
      die('Could not connect: ' . mysqli_error($con));
    }
    $requet= "INSERT INTO categorie(`type`, `prix`) VALUES ".$p;
    
    mysqli_query($con, $requet);
    $requet2=  "SELECT * FROM categorie WHERE type=".$type;
    $result= mysqli_query($con, $requet2);

    $ligne = mysqli_fetch_array($result);
        
        echo $ligne['type'].",";
        echo $ligne['prix'].",";
    
?>