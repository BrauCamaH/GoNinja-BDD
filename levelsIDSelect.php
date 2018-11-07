<?php
    include("connection.php");
    $id= $_POST["id"];
    $sql = "SELECT id FROM Niveles l  
            INNER JOIN Usuarios s
            ON l.id = s.id ;";

    $result= mysqli_query($connect, $sql);

    if(mysqli_num_rows($result)>0){
        while ($row = mysqli_fetch_assoc($result)){
            echo  $row["id"] . "\t";
        }
    }else {
        echo "0";//means that there not data yet 
    }
?>