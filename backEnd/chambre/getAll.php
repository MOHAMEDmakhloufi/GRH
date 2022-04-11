<?php
    $con = mysqli_connect('localhost','root','','grh');
    if (!$con) {
      die('Could not connect: ' . mysqli_error($con));
    }
    $requet= "SELECT * FROM chambre";
    $result= mysqli_query($con, $requet);
    while($ligne = mysqli_fetch_array($result)){
        
        echo $ligne['numeroC'].",";
        echo $ligne['type'].",";
        
    }
?>