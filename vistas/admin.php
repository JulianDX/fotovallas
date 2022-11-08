<?php
require '../modelo/db.php'; // Conexión con la base de datos
session_start(); // Sesión iniciada
if (!isset($_SESSION['user_id'])) {
    header('Location: ../index.php');
}
if (isset($_GET['registrada'])) {
    $msg = "Cotización creada con éxito";
}
if (isset($_GET['actualizada'])) {
    $msg = "Cotización actualizada con éxito";
}
if(isset($_POST['submit'])){
    $valor = $_POST['estado'];
    $id = $_POST['id'];
    
    $consulta = "UPDATE cotizacion SET estado ='$valor' WHERE id = '$id'"; // Consulta para obtener el número de la pregunta
    $result = mysqli_query($db, $consulta); // Se envía la consulta a la base de datos
    
    header('Location: admin.php?actualizada=true');
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
        <div>
            <?php
            include "../controlador/obtener_usuario.php"
            ?>
            <p class="sesion">Bienvenid@ <?php echo $user['email'] ?><br><br><a href="../controlador/logout.php">Cerrar sesión</a></p>
        </div>
        <br>
        <hr>
        <main class="contenedor seccion">
            <h1 class="iconos-texto">Cotizaciones</h1>

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
                    <th colspan="2">Operación</th>
                </tr>
                <?php
                include "../controlador/obtener_usuario.php";
                $email = $user['email'];
                $consulta = "SELECT id, tipo, estado FROM cotizacion"; // Consulta
                $result = mysqli_query($db, $consulta); // Envío de consulta a la base de datos
                while ($row = $result->fetch_assoc()) {
                    echo "<form action='admin.php' method='POST'>";
                    $tipo = "";
                    $id = $row["id"];
                    if ($row["tipo"] == "arana") {
                        $tipo = "Sistema Modular";
                    } else {
                        $tipo = "Scrolling";
                    }
                    echo "<tr><td>" . $row["id"] . "</td><td>" . $tipo . "</td><td>"
                        . "<input name='estado' type='text' id='estado' value='" .  $row['estado'] . "'><input name='id' type='hidden' id='estado' value='" .  $row['id'] . "'>" . "</td><td>"
                        . "<a href='cotizacion_admin.php?n=$id' class='boton-cotizar'>Detalle</td>" . "<td><input class='submit-admin' type='submit' name='submit' value='Actualizar'></td></tr>";
                    echo '</form>';
                }
                echo "</table>";
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