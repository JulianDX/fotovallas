<?php

require '../modelo/db.php'; // Conexión con la base de datos
session_start(); // Sesión iniciada

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital@0;1&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header>
      <a href="../index.php">
        <img class="logo" src="img/logo.png" alt="logo" />
      </a>
    </header>
    <div class="botones">
      <a class="boton" href="login.php">Iniciar Sesión</a>
      <a class="boton" href="registro.php">Registrarse</a>
    </div>
    <div class="bg-login">
      <div class="formulario-login">
      <?php
      include "../controlador/inicio_sesion.php"
      ?>
        <div class="contenido-login">
          <h1>Iniciar Sesión</h1>
          <p>
            Bienvenid@ a Fotovallas, por favor inicie sesión para acceder a
            nuestros servicios.
          </p>
          <form method="POST">
            <input type="text" name="email" id="email" placeholder="Email" />
            <input
              type="password"
              name="password"
              id="password"
              placeholder="Contraseña"
            />
            <input type="submit" name="submit" value="Iniciar Sesión" />
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
