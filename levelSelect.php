<?php
    include("connection.php");
    $id= $_POST["id"];
    $sql = "SELECT l.* FROM Niveles l  
            INNER JOIN Usuarios s
            ON l.usuario = s.id
            WHERE l.id ='". $id . "';";
 
    $result= mysqli_query($connect, $sql);

    if(mysqli_num_rows($result)>0){
        while ($row = mysqli_fetch_assoc($result)){
            echo   $row["puntos"] . "\t". $row["intentos"] . "\t". $row["completado"] . "\t" . $row["usuario"] . "\t"  ;
        }
    }
?>