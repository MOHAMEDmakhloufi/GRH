<?php
        $prix= strval($_GET['prix']);
        $con = mysqli_connect('localhost','root','','grh');
        if (!$con) {
          die('Could not connect: ' . mysqli_error($con));
        }
        $requet= "SELECT * FROM categorie WHERE prix=".$prix;
        $result= mysqli_query($con, $requet);
        $ligne = mysqli_fetch_array($result);
            
        echo $ligne['type'].",";
        echo $ligne['prix'].",";
?>