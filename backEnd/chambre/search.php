<?php
        $p= strval($_GET['p']);
        $con = mysqli_connect('localhost','root','','grh');
        if (!$con) {
          die('Could not connect: ' . mysqli_error($con));
        }
        $requet= "SELECT * FROM chambre ";
        $result= mysqli_query($con, $requet);
        while($ligne = mysqli_fetch_array($result)){
            if(($p == substr($ligne['numeroC'], 0, strlen($p)))||($p == substr($ligne['type'], 0, strlen($p)))){
                echo $ligne['numeroC'].",";
                echo $ligne['type'].",";   
            }
            
        }
?>