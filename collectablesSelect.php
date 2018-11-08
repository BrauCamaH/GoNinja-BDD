<?php
    include("connection.php");

    $levelId = $_POST["levelId"];
    
    $sql = "SELECT l.* FROM Niveles l  
    LEFT  JOIN Usuarios s
    ON l.usuario = s.id
    LEFT  JOIN Coleccionables c
    ON c.usuario = l.id
    WHERE s.id ='". $levelId . "';";

    $result= mysqli_query($connect, $sql) ;
    if (!$result) {
        die("Select failed"); 
    }

    if(mysqli_num_rows($result)>0){
        while ($row = mysqli_fetch_assoc($result)){
            echo  $row["id"] . "\t";
        }
    }

?>