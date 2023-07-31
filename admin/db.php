<?php
    $host = "localhost";
    $username = "root";
    $password = "123456";
    $database = 'dataweb';  
    $connect = new mysqli($host, $username, $password, $database);
    //Connection
    $con = mysqli_connect($host, $username, $password, $database) or die("Couldn't connect to database" );
?>