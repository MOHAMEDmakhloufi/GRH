<?php
        $p= strval($_GET['p']);
        $con = mysqli_connect('localhost','root','','grh');
        if (!$con) {
          die('Could not connect: ' . mysqli_error($con));
        }
        $requet= "SELECT * FROM categorie ";
        $result= mysqli_query($con, $requet);
        while($ligne = mysqli_fetch_array($result)){
            if($p == substr($ligne['type'], 0, strlen($p))||$p == substr($ligne['prix'], 0, strlen($p))){
                echo $ligne['type'].",";
                echo $ligne['prix'].",";
            }
            
        }
?>