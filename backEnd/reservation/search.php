<?php
        $p= strval($_GET['p']); //URL : http://localhost/tp/Projet/search.php?p=14
        $con = mysqli_connect('localhost','root','','grh');
        if (!$con) {
          die('Could not connect: ' . mysqli_error($con));
        }
        $requet= "SELECT * FROM reservation ";
        $result= mysqli_query($con, $requet);
        while($ligne = mysqli_fetch_array($result)){
            if($p == substr($ligne['numeroR'], 0, strlen($p))||
              $p == substr($ligne['CIN'], 0, strlen($p))||
              $p == substr($ligne['numeroC'], 0, strlen($p))||
              $p == substr($ligne['dateDebut'], 0, strlen($p))||
              $p == substr($ligne['dateFin'], 0, strlen($p)))
             {
                echo $ligne['numeroR'].",";
                echo $ligne['CIN'].",";
                echo $ligne['numeroC'].","; 
                echo $ligne['dateDebut'].","; 
                echo $ligne['dateFin'].","; 
                    
            }
            
        }
?>