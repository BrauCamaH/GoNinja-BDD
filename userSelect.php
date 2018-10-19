<?php
    include("connection.php");

    $sql = "SELECT u.nombre, u.contraseña FROM Usuarios u";

    $result= mysqli_query($connect, $sql);
?>
