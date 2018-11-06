<?php
    include("connection.php");

    $email= $_POST["email"];
    $password= $_POST["password"];

    $sql = "SELECT u.id, u.email, u.contraseña FROM Usuarios u WHERE email ='". $email . "';";


    $namecheck = mysqli_query($connect, $sql) or die("query failed");
    if (mysqli_num_rows($namecheck) !=1 ) {
        echo "No user, or more than one ";
        exit();
    }

    $logininfo = mysqli_fetch_assoc($namecheck);
    $query_password = $logininfo["contraseña"];
    $query_id =  $logininfo["id"];

    if($query_password != $password){
        echo "Incorrect password";
        exit();
    }
    echo '0'. "\t". $query_id ."\t";
?>
