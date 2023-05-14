<?php

$host = 'Localhost'; // name of the host
$dbusername = 'root'; // database user name
$password = ''; // database password // I added password
$dbname = 'watchtopia'; // database name


    $conn = mysqli_connect($host , $dbusername , $password , $dbname );

    if ($conn) {
        // echo "valid";
    }
    else {
        // echo "invalid";
    }
    
?>