<?php
require '../modelo/db.php'; // Conexión con la base de datos
session_start(); // Sesión iniciada
if (!isset($_SESSION['user_id'])) {
    header('Location: ../index.php');
}
if (isset($_GET['registrada'])) {
    $msg = "Cotización creada con éxito";
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
</head>

<body>
    <div>
        <header>
            <a href="home.php">
                <img class="logo" src="img/logo.png" alt="logo" />
            </a>
        </header>
        <div class="heading-cliente">
            <?php
            include "../controlador/obtener_usuario.php"
            ?>
            <a class="btn-cotizar btn-cotizar-home" href="">Mis Cotizaciones</a>
            <p class="sesion">Bienvenid@ <?php echo $user['nombre'] ?><br><br><a href="../controlador/logout.php">Cerrar sesión</a></p>
        </div>
        <br>
        <hr>
        <main class="contenedor seccion">
            <h1 class="iconos-texto">Mis cotizaciones</h1>

            <?php
            if (isset($msg)) {
                echo '<p class="alerta">' . $msg . '</p>';
            }
            ?>

            <table>
                <tr>
                    <th>Numéro cotización</th>
                    <th>Servicio</th>
                    <th>Estado</th>
                    <th>Operación</th>
                </tr>
                <?php
                include "../controlador/mostrar_cotizaciones.php"
                ?>
            </table>

        </main>

        <footer class="footer">
            <div class="contenedor contenedor-footer">
                <nav class="navegacion">
                    <a href="home.php"> Inicio </a>
                    <a href="nosotros.php"> Nosotros </a>
                    <a href=""> Cotizar </a>
                    <a href="pqrs.php"> PQRS </a>
                </nav>
                <p class="copyright">
                    Fotovallas. Todos los derechos reservados 2022 &copy;
                </p>
            </div>
        </footer>
</body>

</html>