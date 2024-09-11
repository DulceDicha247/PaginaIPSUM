<?php

    session_start();
    include 'conexion_bd.php';

    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];

    $validar_login = mysqli_query($conn, "SELECT * FROM usuarios WHERE email ='$email' and contrasena='$contrasena'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $email;
        header("location: sesion.php");
        exit;
    } else{
        echo'<script>
            alert("Usuario no existe");
            window.location = "../index.php";
        </script>
        ';
    exit;
    }

?>