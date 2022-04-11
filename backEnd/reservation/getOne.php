<?php
        $num= strval($_GET['num']); // URL : ?num=(1)
        $con = mysqli_connect('localhost','root','','grh');
        if (!$con) {
          die('Could not connect: ' . mysqli_error($con));
        }
        $requet= "SELECT * FROM reservation WHERE numeroR=".$num;
        $result= mysqli_query($con, $requet);
        $ligne = mysqli_fetch_array($result);
            
        echo $ligne['numeroR'].",";
        echo $ligne['CIN'].",";
        echo $ligne['numeroC'].","; 
        echo $ligne['dateDebut'].","; 
        echo $ligne['dateFin'].",";   
?>