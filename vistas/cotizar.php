<?php
require '../modelo/db.php'; // Conexión con la base de datos
session_start(); // Sesión iniciada
if (!isset($_SESSION['user_id'])) {
    header('Location: ../index.php');
}
if (!isset($_GET['tipo'])) {
    header('Location: home.php');
}
$parametro = $_GET['tipo'];
$date = new DateTime(date("Y-m-d"));
$fecha = $date->format('Y-m-d');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fotovallas</title>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital@0;1&display=swap" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<body>
    <div>
        <header>
            <a href="home.php">
                <img class="logo" src="img/logo.png" alt="logo" />
            </a>
        </header>
        <div>
            <?php
            include "../controlador/obtener_usuario.php"
            ?>
            <p class="sesion">Bienvenid@ <?php echo $user['nombre'] ?><br><br><a href="../controlador/logout.php">Cerrar sesión</a></p>
        </div>
        <br>
        <hr>

        <h1>Formato de Cotización</h1>

        <?php
        include "../controlador/registro_cotizacion.php"
        ?>

        <main class="contenedor seccion pqrs">
            <?php
            include "../controlador/obtener_usuario.php"
            ?>
            <form class="formulario" enctype="multipart/form-data" method="POST">
                <fieldset>
                    <legend>Información de cotización</legend>

                    <input class="solo-lectura" name="estructura" type="hidden" id="estructura" value="<?php echo $parametro ?>" readonly="true">

                    <label for="email">Fecha</label>
                    <input class="solo-lectura" name="fecha" type="text" id="fecha" value="<?php echo $fecha ?>" readonly="true">

                    <label for="nombre_empresa">Nombre de la empresa en que trabaja</label>
                    <input type="text" placeholder="Nombre Empresa" id="nombre_empresa" name="nombre_empresa" required>

                    <label for="email">E-mail</label>
                    <input class="solo-lectura" type="email" placeholder="Tu e-mail" id="email" name="email" value="<?php echo $user['email'] ?>" readonly="true">

                    <label for="telefono">Teléfono</label>
                    <input type="number" placeholder="Tu teléfono" id="telefono" name="telefono" required>
                    <!-- Tipo de material -->

                    <?php if ($parametro == "arana") : ?>
                        <label for="opciones">Tipo de Tela</label>
                        <select id="opciones" name="material" required>
                            <option value="" disabled selected>-- Seleccione --</option>
                            <option value="banner">Banner</option>
                            <option value="lycra">Lycra</option>
                        </select>
                    <?php else : ?>
                        <label for="opciones">Material</label>
                        <select id="opciones" name="material" required>
                            <option value="" disabled selected>-- Seleccione --</option>
                            <option value="acetato">Acetato</option>
                            <option value="vinilo">Vinilo Autoadhesivo</option>
                        </select>
                    <?php endif; ?>

                    <?php if ($parametro == "arana") : ?>
                        <label for="opciones">Tamaño</label>
                        <select id="opciones" name="tamano" required>
                            <option value="" disabled selected>-- Seleccione --</option>
                            <option value="2x2">2x2</option>
                            <option value="2x3">2x3</option>
                            <option value="2x4">2x4</option>
                        </select>
                    <?php else : ?>
                        <label for="opciones">Tamaño</label>
                        <select id="opciones" name="tamano">
                            <option value="" disabled selected>-- Seleccione --</option>
                            <option value="1.90x0.86">1.90x0.86</option>
                            <option value="2x1.56">2x1.56</option>
                        </select>
                    <?php endif; ?>
                    <label for="imagen">Imagen</label>
                    <input type="file" id="foto" name="foto" accept="image/png, image/jpeg">
                </fieldset>

                <input type="submit" value="Procesar" class="boton-verde" name="submit" />
            </form>
        </main>

        <footer class="footer">
            <div class="contenedor contenedor-footer">
                <nav class="navegacion">
                    <a href="home.php"> Inicio </a>
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