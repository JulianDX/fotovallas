<?php
require '../modelo/db.php'; // Conexión con la base de datos
session_start(); // Sesión iniciada
if (!isset($_SESSION['user_id'])) {
    header('Location: ../index.php');
}
if (isset($_SESSION['cargo'])) {
    header('Location: admin.php');
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
            <a class="btn-cotizar btn-cotizar-home" href="miscotizaciones.php">Mis Cotizaciones</a>
            <p class="sesion">Bienvenid@ <?php echo $user['nombre'] ?><br><br><a href="../controlador/logout.php">Cerrar sesión</a></p>
        </div>
        <br>
        <hr>
        <main class="contenedor seccion">
            <h1 class="iconos-texto">Nuestros productos</h1>
            <div class="contenido-home">
                <div class="imagen-producto">
                    <img src="img/arana.jpg" alt="arana">
                </div>
                <div>
                    <h3>Sistema Profesional de Exhibición Modular</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates expedita fugiat dolor laboriosam ullam
                        nostrum exercitationem et, sed sunt, totam modi reprehenderit quidem laborum nemo beatae magnam rem doloremque
                        accusamus?</p>
                    <p>
                        Dolor sit amet consectetur adipisicing elit. Maiores, consequatur saepe aliquid, quia dolor similique
                        optio et necessitatibus enim nostrum, sed dolorum praesentium voluptatem? Voluptatum ducimus natus molestiae aut.
                    </p>
                    <a class="btn-cotizar" href="cotizar.php?tipo=arana">Cotizar</a>
                </div>
            </div>
            <div class="contenido-home">
                <div class="imagen-producto derecha">
                    <img src="img/scrolling.png" alt="arana">
                </div>
                <div class="izquierda">
                    <h3>Scrolling</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates expedita fugiat dolor laboriosam ullam
                        nostrum exercitationem et, sed sunt, totam modi reprehenderit quidem laborum nemo beatae magnam rem doloremque
                        accusamus?</p>
                    <p>
                        Dolor sit amet consectetur adipisicing elit. Maiores, consequatur saepe aliquid, quia dolor similique
                        optio et necessitatibus enim nostrum, sed dolorum praesentium voluptatem? Voluptatum ducimus natus molestiae aut.
                    </p>
                    <a class="btn-cotizar" href="cotizar.php?tipo=scrolling">Cotizar</a>
                </div>
            </div>
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