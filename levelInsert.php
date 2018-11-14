<?php
    include("connection.php");

    $name = $_POST["name"];
    $score = $_POST["score"];
    $attemps =  $_POST["attemps"];
    $isComplete =  $_POST["isComplete"];
    $userId = $_POST["userId"];

    $sql="INSERT INTO Niveles (nombre, puntos, intentos, completado, usuario) 
          VALUES ('".$name."','".$score."','".$attemps."','".$isComplete."','".$userId."')";

    $result= mysqli_query($connect, $sql);
    
?>