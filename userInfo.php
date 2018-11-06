<?php
    include("connection.php");

    $id= $_POST["id"];

    $sql = "SELECT u.nombre, u.apellido, u.email, u.nickname FROM Usuarios u WHERE u.id ='". $id . "';";


    $logininfo = mysqli_fetch_assoc($sql);
    $name = $logininfo["nombre"];
    $lastname = $logininfo["apellido"];
    $email = $logininfo["email"];
    $nickname = $logininfo["nickname"];

    if($query_password != $password){
        echo "Incorrect password";
        exit();
    }

    echo '0';
?>