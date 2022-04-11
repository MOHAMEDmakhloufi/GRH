<?php
    $p= $_GET['p']; // p par exemple egale ="(99999999, 'flen', 'ben foulen', 'n° rue ', 'flen@gmail', 12312323)"
    $cin= $_GET['CIN'];// id = cin
    $con = mysqli_connect('localhost','root','','grh');
    if (!$con) {
      die('Could not connect: ' . mysqli_error($con));
    }
    $requet= "INSERT INTO client (`CIN`, `nom`, `prenom`, `adresse`, `email`, `telephone`) VALUES ".$p;
    
    mysqli_query($con, $requet);
    $requet2=  "SELECT * FROM client WHERE cin=".$cin;
    $result= mysqli_query($con, $requet2);

    $ligne = mysqli_fetch_array($result);
        
        echo $ligne['CIN'].",";
        echo $ligne['nom'].",";
        echo $ligne['prenom'].","; 
        echo $ligne['adresse'].","; 
        echo $ligne['email'].","; 
        echo $ligne['telephone']; 
            
        
    
?>