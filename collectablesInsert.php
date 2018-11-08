<?php
    include("connection.php");

    $isActive = $_POST["isActive"];
    $position = $_POST["position"];
    $levelId=$POST["LevelId"];


    $sql="INSERT INTO Colleccionables (activo, posicion, nivel) 
          VALUES ('".$isActive."','".$position."','".$levelId."')";

    $result= mysqli_query($connect, $sql);
?>