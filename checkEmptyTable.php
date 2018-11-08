<?php
    include("connection.php");

    $userId = $_POST["userId"];

     $sql = "SELECT * FROM Niveles l  
            INNER JOIN Usuarios s
            ON l.id = s.id
            WHERE s.id ='". $userId . "';";
 
    $result= mysqli_query($connect, $sql);

    if(mysqli_num_rows($result)==0){
        echo '0';
    }else{
        echo '1';
    }
?>