<?php
    $dbhost="localhost";
    $dbuser="root";
    $dbpass="";
    $dbname="rede_scalable";

    $con=mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if(!$con){
        die("failed to connect!");
    }
?>