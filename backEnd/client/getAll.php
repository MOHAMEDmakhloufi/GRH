<?php
    $con = mysqli_connect('localhost','root','','grh');
    if (!$con) {
      die('Could not connect: ' . mysqli_error($con));
    }
    $requet= "SELECT * FROM client";
    $result= mysqli_query($con, $requet);
    while($ligne = mysqli_fetch_array($result)){
        
        echo $ligne['CIN'].",";
        echo $ligne['nom'].",";
        echo $ligne['prenom'].","; 
        echo $ligne['adresse'].","; 
        echo $ligne['email'].","; 
        echo $ligne['telephone']; 
        echo '<br>';
        
    }
?>