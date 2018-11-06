<?php
    include("connection.php");

    $id= $_POST["id"];

    $sql = "SELECT u.nombre, u.apellido, u.email, u.nickname FROM Usuarios u WHERE u.id ='". $id . "';";

    //$sql = "SELECT u.nombre, u.apellido, u.email, u.nickname FROM Usuarios u WHERE u.id ='". 1 . "';";

    $info = mysqli_query($connect, $sql) or die("query failed");

    $logininfo = mysqli_fetch_assoc($info);
    $name = $logininfo["nombre"];
    $lastname = $logininfo["apellido"];
    $email = $logininfo["email"];
    $nickname = $logininfo["nickname"];

    echo $name ."\t". $lastname ."\t". $email ."\t". $nickname ."\t";
?>