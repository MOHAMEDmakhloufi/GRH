<?php
        $numeroC= strval($_GET['numeroC']);
        $con = mysqli_connect('localhost','root','','grh');
        if (!$con) {
          die('Could not connect: ' . mysqli_error($con));
        }
        $requet= "SELECT * FROM chambre WHERE numeroC=".$numeroC;
        $result= mysqli_query($con, $requet);
        $ligne = mysqli_fetch_array($result);
            
        echo $ligne['numeroC'].",";
        echo $ligne['type'].",";
?>