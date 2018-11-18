<?php
    include("connection.php");

    $userId = $_POST["userId"];
    $jumps = $_POST["jumps"];
    $totalScore = $_POST["totalScore"];

    $sql = "INSERT INTO PersonajePrincipal (saltos, puntosObtenidos,usuario) 
    VALUES ('".$jumps."','".$totalScore."','".$userId."')";
    
    $result= mysqli_query($connect, $sql) ;
?>