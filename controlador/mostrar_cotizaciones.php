<?php
include "../controlador/obtener_usuario.php";
$email = $user['email'];
$consulta = "SELECT id, tipo, estado FROM cotizacion WHERE email_contacto = '$email'"; // Consulta
$result = mysqli_query($db, $consulta); // Envío de consulta a la base de datos
while ($row = $result->fetch_assoc()) {
    $tipo = "";
    $estado = "";
    $id = $row["id"];
    if ($row["tipo"] == "arana") {
        $tipo = "Sistema Modular";
    } else {
        $tipo = "Scrolling";
    }
    if ($row["estado"] == "PENDIENTE" or $row["estado"] == "RECHAZADA") {
        $estado = "Detalle y Precio";
    } else {
        $estado = "Pagar";
    }
    echo "<tr><td>" . $row["id"] . "</td><td>" . $tipo . "</td><td>"
        . $row["estado"] . "</td><td>"
        . "<a href='micotizacion.php?n=$id' class='link-resumen'>" . $estado . "</td>";
}
echo "</table>";
