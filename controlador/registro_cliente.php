<?php 

if(!empty($_POST['submit'])){
    if(!empty($_POST['nombre']) and !empty($_POST['email']) and !empty($_POST['password'])){
        $nombre=mysqli_real_escape_string($db, $_POST['nombre']);
        $email=mysqli_real_escape_string($db, $_POST['email']);
        $password=mysqli_real_escape_string($db, $_POST['password']);
        if(strlen($password)<6){
            echo "<p class='alerta2'>La contraseña no debe tener menos de 6 caracteres</p>";
        }else {
            $cifrado = md5($password); // Cifrado de la contraseña
            $user_check_query = "SELECT * FROM clientes WHERE email = '$email'"; // Consulta SQL
            $result = mysqli_query($db, $user_check_query); // Se envía la consulta a la base de datos
            $verificar = mysqli_fetch_assoc($result); // Si la consulta regresa algo, se asigna a una variable
            $sql= "INSERT INTO clientes (nombre,email,password) VALUES ('$nombre','$email','$cifrado')"; // Consulta SQL
            $result = mysqli_query($db, $sql); // Se envía la consulta a la base de datos
            if($verificar){
                echo "<p class='alerta2'>Ya hay un usuario registrado con ese correo</p>";
            }else{
                if($result){
                    echo "<p class='alerta'>Registro exitoso</p>";
                }else{
                    echo "<p class='alerta2'>Hubo un problema con el registro</p>";
                }
            }
        }
    }else{
        echo "<p class='alerta2'>Por favor rellene todos los campos</p>";
    }
}

?>