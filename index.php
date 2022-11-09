<?php
session_start(); // Sesión iniciada
if (isset($_SESSION['user_id'])) {
  header('Location: vistas/home.php');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fotovallas</title>
    <link rel="stylesheet" href="vistas/css/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital@0;1&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div>
      <header>
        <a href="index.php">
          <img class="logo" src="vistas/img/logo.png" alt="logo" />
        </a>
      </header>
      <div class="botones">
        <a class="boton" href="vistas/login.php">Iniciar Sesión</a>
        <a class="boton" href="vistas/registro.php">Registrarse</a>
      </div>
      <div class="imagen-principal">
        <div class="contenido-banner">
          <div class="contenido-header">
            <h1>Fotovallas</h1>
            <h2>Poniendo tus pensamientos en imprenta</h2>
            <a href="vistas/nosotros.php">Sobre Nosotros</a>
          </div>
        </div>
      </div>
    </div>

    <main class="contenedor seccion">
      <h2 class="iconos-texto">¿Por qué elegirnos?</h2>
      <div class="iconos-nosotros">
        <div class="icono">
          <h3>Seguridad</h3>
          <img
            src="vistas/img/icono1.svg"
            alt="Icono seguridad"
            loading="lazy"
          />
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Consequuntur, suscipit quidem? Quod a corporis libero porro quidem.
            Ipsam accusamus architecto cumque aliquid exercitationem laborum
            aperiam reiciendis sunt. Deserunt, dolorem ea!
          </p>
        </div>
        <div class="icono">
          <h3>Precio</h3>
          <img src="vistas/img/icono2.svg" alt="Icono precio" loading="lazy" />
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Consequuntur, suscipit quidem? Quod a corporis libero porro quidem.
            Ipsam accusamus architecto cumque aliquid exercitationem laborum
            aperiam reiciendis sunt. Deserunt, dolorem ea!
          </p>
        </div>
        <div class="icono">
          <h3>Tiempo</h3>
          <img src="vistas/img/icono3.svg" alt="Icono tiempo" loading="lazy" />
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Consequuntur, suscipit quidem? Quod a corporis libero porro quidem.
            Ipsam accusamus architecto cumque aliquid exercitationem laborum
            aperiam reiciendis sunt. Deserunt, dolorem ea!
          </p>
        </div>
      </div>
    </main>
    <section class="imagen-contacto">
      <div class="contenido-banner">
        <h2>Empieza a crear el producto de tus sueños</h2>
        <p>¡Selecciona tus materiales!</p>
        <a href="vistas/login.php" class="boton-cotizar">Cotizar una compra</a>
      </div>
    </section>
    <footer class="footer">
      <div class="contenedor contenedor-footer">
        <nav class="navegacion">
          <a href="index.php"> Inicio </a>
          <a href="vistas/nosotros.php"> Nosotros </a>
          <a href="vistas/login.php"> Cotizar </a>
          <a href="vistas/pqrs.php"> PQRS </a>
        </nav>
        <p class="copyright">
          Fotovallas. Todos los derechos reservados 2022 &copy;
        </p>
      </div>
    </footer>
  </body>
</html>
