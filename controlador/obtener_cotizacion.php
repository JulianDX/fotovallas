<?php
$id = $_GET['n'];
$consulta = "SELECT * FROM cotizacion WHERE id = '$id'"; // Consulta para obtener el número de la pregunta
$result = mysqli_query($db, $consulta); // Se envía la consulta a la base de datos
$cotizacion = mysqli_fetch_assoc($result); // Se asigna el retorno de la base de datos a una variable
$numeroFormateado = number_format($cotizacion['precio'], 2);

?>