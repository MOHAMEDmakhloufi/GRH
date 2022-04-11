<?php
    $con = mysqli_connect('localhost','root','','grh');//URL: http://localhost/tp/Projet/getAll.php
    if (!$con) {
      die('Could not connect: ' . mysqli_error($con));
    }
    $requet= "SELECT * FROM reservation";
    $result= mysqli_query($con, $requet);
    while($ligne = mysqli_fetch_array($result)){
        
        
        echo $ligne['numeroR'].",";
        echo $ligne['CIN'].",";
        echo $ligne['numeroC'].","; 
        echo $ligne['dateDebut'].","; 
        echo $ligne['dateFin'].",";   
    }
?>