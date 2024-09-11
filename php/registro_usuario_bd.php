<?php

include 'conexion_bd.php';

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos']; 
$email = $_POST['email']; 
$telefono = $_POST['telefono']; 
$pais = $_POST['pais']; 
$comida = $_POST['comida']; 
$artista = $_POST['artista']; 
$lugar = $_POST['lugar']; 
$color = $_POST['color']; 
$contrasena = $_POST['contrasena']; 
$contrasena_confirm = $_POST['contrasena_confirm']; 

$query = "INSERT INTO usuarios(nombre, apellidos, email, telefono, pais, comida, artista, lugar, color, contrasena, contrasena_confirm)
        VALUES ('$nombre', '$apellidos', '$email', '$telefono', '$pais', '$comida', '$artista', '$lugar', '$color', '$contrasena', '$contrasena_confirm')";

//Verificar no se repita email
$verificar_email = mysqli_query($conn, "SELECT * FROM usuarios WHERE email = '$email'");

if(mysqli_num_rows($verificar_email) > 0){
    echo'<script>
        alert("Correo ya registrado");
        window.location = "../index.php";
    </script>';
    exit;
} 

$ejecutar = mysqli_query($conn, $query);

if($ejecutar){
    echo '
    <script>
        alert("Tu Usuario se ha registrado correctamente");
        window.location = "../index.php";
    </script>
    ';
} else{
    echo '
    <script>
        alert("Usuario no almacenado, vuelve a ingresar datos");
        window.location = "../index.php";
    </script>
    ';
}

mysqli_close($conn);

?>