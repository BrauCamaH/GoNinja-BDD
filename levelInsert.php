<?php
    include("connection.php");

    $name = $_POST["name"];
    $score = $_POST["score"];
    $attemps =  $_POST["attemps"];
    $isComplete =  $_POST["isComplete"];

    $sql="INSERT INTO Niveles (nombre, puntos, intentos, completado) 
          VALUES ('".$name."','".$score."','".$attemps."','".$isComplete."')";

    $result= mysqli_query($connect, $sql);

?>