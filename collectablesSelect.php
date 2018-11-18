<?php
    include("connection.php");

    $levelId = $_POST["levelId"];
    
    $sql = "SELECT c.* FROM Coleccionables c  
    LEFT  JOIN Niveles l
    ON c.nivel = l.id
    LEFT  JOIN Usuarios s
    ON l.usuario = s.id
    WHERE l.id = $levelId   ORDER BY  c.posicion";

    $result= mysqli_query($connect, $sql) or die("error") ;

    if(mysqli_num_rows($result)>0){
        while ($row = mysqli_fetch_assoc($result)){
            echo  $row["id"] . "\t" . $row["activo"] . "\t" . $row["posicion"] . "\t" . $row["nivel"] . ";";
        }
    }else{
        echo '0';
    }

?>