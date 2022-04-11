<?php
    $p= $_GET['p']; 
  
    $con = mysqli_connect('localhost','root','','grh');// Dans l'URL : ?p=(778,%2014533778,%201,%20%272000-01-22%27,%20%272000-04-22%27%20)
    if (!$con) {
      die('Could not connect: ' . mysqli_error($con));
    }
    $requet= "INSERT INTO reservation VALUES ".$p;
    
    mysqli_query($con, $requet);
    $requet2=  "SELECT * FROM reservation WHERE numeroR= (select max(numeroR) from reservation)";
    $result= mysqli_query($con, $requet2);

    $ligne = mysqli_fetch_array($result);
    echo $ligne['numeroR']." , ";
    echo $ligne['CIN']." , ";
    echo $ligne['numeroC']." , "; 
    echo $ligne['dateDebut']." , "; 
    echo $ligne['dateFin']." , ";      
        
    
?>