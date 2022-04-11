<?php
    $con = mysqli_connect('localhost','root','','grh');
    if (!$con) {
      die('Could not connect: ' . mysqli_error($con));
    }
    $requet= "SELECT * FROM categorie";
    $result= mysqli_query($con, $requet);
    while($ligne = mysqli_fetch_array($result)){
        
        echo $ligne['type'].",";
        echo $ligne['prix'].",";
    }
?>