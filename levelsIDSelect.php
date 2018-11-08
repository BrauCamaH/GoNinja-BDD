<?php
    include("connection.php");

    $userId= $_POST["userId"];
    
    
    $sql = "SELECT l.* FROM Niveles l  
    LEFT  JOIN Usuarios s
    ON l.usuario = s.id
    WHERE s.id ='". $userId . "';";

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