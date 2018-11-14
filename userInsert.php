<?php
    include("connection.php");

    $name = $_POST["addName"];
    $lastName= $_POST["addLastName"];
    $nickname=$_POST["addNickname"];
    $email= $_POST["addEmail"];
    $password =$_POST["addPassword"];

    $sql="INSERT INTO Usuarios (nombre, apellido, nickname,email, contraseña) 
          VALUES ('".$name."','".$lastName."','".$nickname."','".$email."','".$password."')";


    $result= mysqli_query($connect, $sql,$c);
    
?>