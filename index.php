<?php

    session_start();
    if(isset($_SESSION['usuario'])){
        header("location: sesion.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate en WePlot</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Por favor Inicia sesión aqui</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="php/login_usuario_db.php" method="POST" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Correo Electronico" name="email" id="email" required>
                        <input type="password" placeholder="Contraseña" name="contrasena" id="contrasena" required>
                        <button>Entrar</button>
                    </form>

                    <!--Register-->
                    <form action="php/registro_usuario_bd.php" method="POST" class="formulario__register">
                        <h2>Regístrarse</h2>
						<input type="text" placeholder="Nombre" name="nombre" id="nombre" required>
						<input type="text" placeholder="Apellidos" name="apellidos" id="apellidos" required>
						<input type="email" placeholder="Correo electronico" name="email" id="email" required />
						<input type="tel" placeholder="Telefono" name="telefono" id="telefono" required>
						<input type="text" placeholder="Pais" name="pais" id="pais" required>
						<input type="text" placeholder="Comida favorita" name="comida" id="comida" required>
						<input type="text" placeholder="Artista favorito" name="artista" id="artista" required>
						<input type="text" placeholder="Lugar favorito" name="lugar" id="lugar" required>
						<input type="text" placeholder="Color favorito" name="color" id="color" required>
                        <input type="password" placeholder="Contraseña" name="contrasena" id="contrasena" required>
						<input type="password" placeholder="Confirmar Contraseña" name="contrasena-confirm" id="contrasena-confirm" required>
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>

        <script src="assets/js/script.js"></script>
</body>
</html>