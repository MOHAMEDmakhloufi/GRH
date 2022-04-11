<?php
    $p= $_GET['p']; 
    $username= $_GET['username'];
    $con = mysqli_connect('localhost','root','','grh');
    if (!$con) {
      die('Could not connect: ' . mysqli_error($con));
    }
    $requet= "INSERT INTO compte (username, `password`, cin ) VALUES ".$p;
    
    mysqli_query($con, $requet);
    $requet2=  "SELECT * FROM compte WHERE username=".$username;
    $result= mysqli_query($con, $requet2);

    $ligne = mysqli_fetch_array($result);
        
        echo $ligne['CIN'].",";
        echo $ligne['username'].",";
        echo $ligne['password'].","; 
        echo $ligne['role']; 
        
            
        
    
?>