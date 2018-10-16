<?php
    $server = "localhost";
    $username= "root";
    $password="87654321";
    $db="GoNinjaBDD";

    $connect = new mysqli($server,$username,$password,$db);

    // Check connection
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>