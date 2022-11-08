<?php
if (isset($_SESSION['user_id'])) {
    $id = $_SESSION['user_id']; // Asignar el id del usuario a una variable de sesión
    $user_check_query = "SELECT * FROM clientes WHERE id = '$id'"; // Consulta
    $result = mysqli_query($db, $user_check_query); // Envío de consulta a la base de datos
    $verificar = mysqli_fetch_assoc($result); // Asignar el resultado de la consulta a una variable
    $user_check_query = "SELECT * FROM admin WHERE id = '$id'"; // Consulta SQL
    $result = mysqli_query($db, $user_check_query); // Se envía la consulta a la base de datos
    $verificar2 = mysqli_fetch_assoc($result); // Se asigna el retorno de la base de datos a una variable
    $user = null;

    if ($verificar) {
        $user = $verificar; // Si la consulta retorna un objeto, se asigna a la variable de usuario
    }else{
        $user = $verificar2;
    }
}
