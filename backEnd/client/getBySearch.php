<?php
        $p= strval($_GET['p']); 
        $con = mysqli_connect('localhost','root','','grh');
        if (!$con) {
          die('Could not connect: ' . mysqli_error($con));
        }
        $requet= "SELECT * FROM client ";
        $result= mysqli_query($con, $requet);
        while($ligne = mysqli_fetch_array($result)){
            if($p == substr($ligne['CIN'], 0, strlen($p))||
              $p == substr($ligne['nom'], 0, strlen($p))||
              $p == substr($ligne['prenom'], 0, strlen($p))||
              $p == substr($ligne['adresse'], 0, strlen($p))||
              $p == substr($ligne['email'], 0, strlen($p))||
              $p == substr($ligne['telephone'], 0, strlen($p))){
                echo $ligne['CIN'].",";
                echo $ligne['nom'].",";
                echo $ligne['prenom'].","; 
                echo $ligne['adresse'].","; 
                echo $ligne['email'].","; 
                echo $ligne['telephone']; 
            
            }
            
        }
?>