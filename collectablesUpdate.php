<?php
    include("connection.php");

    $id= $_POST["id"];
    $isActive = $_POST["isActive"];
    $position = $_POST["position"];
    $levelId = $_POST["levelId"];


    $sql = "UPDATE coleccionables c 
    SET   c.activo=$isActive , c.posicion = $position, c.nivel = $levelId
    WHERE id ='". $id . "';";
    
    $result= mysqli_query($connect, $sql) ;
?>