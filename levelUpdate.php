<?php
    include("connection.php");
    $id= $_POST["id"];
    $score = $_POST["score"];
    $attemps =  $_POST["attemps"];
    $isComplete =  $_POST["isComplete"];

    $sql = "UPDATE Niveles l 
            SET   l.puntos= $score , l.intentos = $attemps , l.completado = $isComplete
            WHERE id ='". $id . "';";

    $result= mysqli_query($connect, $sql);
?>