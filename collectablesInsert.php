<?php
    include("connection.php");

    $isActive = $_POST["isActive"];
    $position = $_POST["position"];
    $levelId= $_POST["levelId"];

    $sql="INSERT INTO Coleccionables (activo, posicion, nivel) 
          VALUES ('".$isActive."','".$position."','".$levelId."')";

    $result= mysqli_query($connect, $sql);
?>