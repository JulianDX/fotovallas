<?php
require '../modelo/db.php'; // Conexión con la base de datos
session_start(); // Sesión iniciada
if (!isset($_SESSION['user_id'])) {
    header('Location: ../index.php');
}
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
            <?php
            include "../controlador/obtener_cotizacion.php"
            ?>
            <p class="sesion">Bienvenid@ <?php echo $user['email'] ?><br><br><a href="../controlador/logout.php">Cerrar sesión</a></p>
        </div>
        <br>
        <hr>

        <?php
        if ($cotizacion['tipo'] == "scrolling") {
            $tipo = "Scrolling";
        } else {
            $tipo = "Sistema Modular";
        }
        ?>

        <h1>Resumen Cotización - <?php echo $tipo ?></h1>

        <?php
        include "../controlador/registro_cotizacion.php"
        ?>

        <main class="contenedor seccion pqrs">
            <?php
            include "../controlador/obtener_usuario.php"
            ?>
            <form class="formulario" enctype="multipart/form-data" method="POST">
                <fieldset>
                    <legend>Resumen Cotización</legend>

                    <input class="solo-lectura" name="estructura" type="hidden" id="estructura" value="5" readonly="true">

                    <label for="email">Fecha</label>
                    <input class="solo-lectura" value="<?php echo $cotizacion['fecha'] ?>" readonly="true">

                    <label for="nombre_empresa">Nombre de la empresa en que trabaja</label>
                    <input class="solo-lectura" type="text" value="<?php echo $cotizacion['empresa'] ?>" readonly="true">

                    <label for="email">E-mail</label>
                    <input class="solo-lectura" type="email" value="<?php echo $cotizacion['email_contacto'] ?>" readonly="true">

                    <label for="telefono">Teléfono</label>
                    <input class="solo-lectura" type="number" value="<?php echo $cotizacion['telefono'] ?>" readonly="true">

                    <label for="material">Material</label>
                    <input class="solo-lectura" type="text" value="<?php echo $cotizacion['material'] ?>" readonly="true">

                    <label for="tamano">Tamaño (m)</label>
                    <input class="solo-lectura" type="text" value="<?php echo $cotizacion['tamano'] ?>" readonly="true" <label for=""></label>
                    <label for="precio">Precio</label>
                    <input class="solo-lectura" type="text" value="<?php echo '$' . $numeroFormateado; ?>" readonly="true" <label for=""></label>
                    <label for="imagen">Imagen</label>
                    <div>
                        <img class="imagen_resumen" src="<?php echo $cotizacion['url_imagen'] ?>" alt="imagen-cotizacion">
                    </div>
                </fieldset>
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