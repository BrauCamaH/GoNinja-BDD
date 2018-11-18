<?php
    include("connection.php");

    $userId= $_POST["userId"];
   
    $sql = "SELECT p.saltos, p.puntosobtenidos FROM 
            PersonajePrincipal p WHERE usuario = '". $userId . "' ;";

    $result= mysqli_query($connect, $sql);

    if(mysqli_num_rows($result)>0){
        while ($row = mysqli_fetch_assoc($result)){
            echo   $row["saltos"] . "\t". $row["puntosobtenidos"]  ;
        }
    }else{
        echo   "0" . "\t". "0";
    }
?>