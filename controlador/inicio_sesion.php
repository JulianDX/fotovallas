<?php

if(!empty($_POST['submit'])){
    if(!empty($_POST['email']) and !empty($_POST['password'])){
        $email=mysqli_real_escape_string($db, $_POST['email']);
        $password=md5(mysqli_real_escape_string($db, $_POST['password']));
        $sql= "SELECT * FROM clientes WHERE email='$email' AND password='$password'"; // Consulta SQL
        $result = mysqli_query($db, $sql); // Se envía la consulta a la base de datos
        $verificar = mysqli_fetch_assoc($result); // Se asigna el retorno de la base de datos a una variable
        $user_check_query = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'"; // Consulta SQL
        $result = mysqli_query($db, $user_check_query); // Se envía la consulta a la base de datos
        $verificar2 = mysqli_fetch_assoc($result); // Se asigna el retorno de la base de datos a una variable
        if($verificar){
            $_SESSION['user_id'] = $verificar['id'];
            header('Location: ../vistas/home.php');
        }else if($verificar2){
            $_SESSION['user_id'] = $verificar2['id'];
            $_SESSION['cargo'] = 1;
            header('Location: ../vistas/admin.php');
        }else{
            echo "<p class='alerta2'>Credenciales incorrectas</p>";
        }
    }else{
        echo "<p class='alerta2'>Por favor rellene todos los campos</p>";
    }
}
?>