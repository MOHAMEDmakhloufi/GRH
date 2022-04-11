<?php
    $p= $_GET['p']; //URL : http://localhost/tp/Projet/update.php?p=datefin=%222022-11-09%22&num=777
    $num= $_GET['num'];
    $con = mysqli_connect('localhost','root','','grh');
    if (!$con) {
      die('Could not connect: ' . mysqli_error($con));
    }
    $requet= "UPDATE reservation SET ".$p." WHERE numeroR=".$num;
    mysqli_query($con, $requet);
?>