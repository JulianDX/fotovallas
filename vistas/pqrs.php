<?php
session_start(); // Sesión iniciada
require '../modelo/db.php'; // Conexión con la base de datos
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Nosotros</title>
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital@0;1&display=swap" rel="stylesheet" />
</head>

<body>
  <header>
    <a href="../index.php">
      <img class="logo" src="img/logo.png" alt="logo" />
    </a>
  </header>

  <hr />

  <h1>Formulario PQRS</h1>

  <?php
  include "../controlador/crear_pqrs.php"
  ?>

  <?php
  include "../controlador/obtener_usuario.php"
  ?>

  <main class="contenedor seccion pqrs">
    <form class="formulario" method="POST">
      <fieldset>
        <legend>Información de contacto</legend>
        <label for="nombre">Nombre</label>
        <input type="text" placeholder="Tu nombre" name="nombre" id="nombre" value="<?php echo (isset($user)) ? $user['nombre'] : ''; ?>" required">

        <label for=" email">E-mail</label>
        <input type="email" placeholder="Tu e-mail" name="email" id="email" value="<?php echo (isset($user)) ? $user['email'] : ''; ?>" required">

        <label for=" telefono">Teléfono</label>
        <input type="number" placeholder="Tu teléfono" id="telefono" name="telefono" required">

          <label for=" opciones">Tipo de consulta</label>
        <select id="opciones" name="tipo" required>
          <option value="" disabled selected>-- Seleccione --</option>
          <option value="pregunta">Pregunta</option>
          <option value="queja">Queja</option>
          <option value="reclamo">Reclamo</option>
          <option value="sugerencia">Sugerencia</option>
        </select>

        <label for="mensaje">Mensaje</label>
        <textarea id="mensaje" name="mensaje" required></textarea>
      </fieldset>

      <input type="submit" value="Enviar" name="submit" class="boton-verde" />
    </form>
  </main>

  <footer class="footer">
    <div class="contenedor contenedor-footer">
      <nav class="navegacion">
        <a href="../index.php"> Inicio </a>
        <a href="nosotros.php"> Nosotros </a>
        <a href="cotizar.php"> Cotizar </a>
        <a href="pqrs.php"> PQRS </a>
      </nav>
      <p class="copyright">
        Fotovallas. Todos los derechos reservados 2022 &copy;
      </p>
    </div>
  </footer>
</body>

</html>