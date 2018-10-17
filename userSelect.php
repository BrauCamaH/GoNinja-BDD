<?php
    include("connection.php");
    $sql = "SELECT email, contraseña FROM usuarios";
    $result= mysql_query($connect, $sql);
?>