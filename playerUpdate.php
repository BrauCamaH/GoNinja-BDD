<?php
    include("connection.php");

    $userId= $_POST["userId"];
    $jumps = $_POST["jumps"];
    $totalScore = $_POST["totalScore"];

    $sql = "UPDATE PersonajePrincipal c 
    SET   c.saltos=$jumps , c.puntosObtenidos = $totalScore
    WHERE usuario ='". $userId . "';";
    
    $result= mysqli_query($connect, $sql) ;
?>