<?php

    session_start();
    if(!isset($_SESSION['usuario'])){
        echo'
        <script>
            alert("Favor de iniciar sesion");
            window.location = "../index.php";
        </script>
        ';
        session_destroy();
        die();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>
    <h1>Inicio de sesion correcto </h1>
    <a href="php/cerrar_sesion.php">Cerrar sesión</a>

    

</body>
</html>