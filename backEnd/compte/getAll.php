<?php
    $con = mysqli_connect('localhost','root','','grh');
    if (!$con) {
      die('Could not connect: ' . mysqli_error($con));
    }
    $requet= "SELECT * FROM compte";
    $result= mysqli_query($con, $requet);
    while($ligne = mysqli_fetch_array($result)){
        
        echo $ligne['CIN'].",";
        echo $ligne['username'].",";
        echo $ligne['password'].","; 
        echo $ligne['role']; 
        
    }
?>