<?php
    include("connection.php");
    $id= $_POST["id"];
    $sql = "SELECT l.nombre, l.puntos , l.intentos , l.completado FROM Niveles l  WHERE id ='". $id . "';";

    $result= mysqli_query($connect, $sql);

    if(mysqli_num_rows($result>0)){
        while ($row = mysqli_fetch_assoc($result)){
            echo $row["nombre"] . "\t". $row["puntos"] . "\t". $row["intentos"] . "\t". $row["completado"];
        }
    }else {
        echo "0";//means that there not data yet 
    }

?>