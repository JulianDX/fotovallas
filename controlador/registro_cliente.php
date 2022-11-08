<?php 

if(!empty($_POST['submit'])){
    if(!empty($_POST['nombre']) and !empty($_POST['email']) and !empty($_POST['password'])){
        $nombre=mysqli_real_escape_string($db, $_POST['nombre']);
        $email=mysqli_real_escape_string($db, $_POST['email']);
        $password=mysqli_real_escape_string($db, $_POST['password']);
        $cifrado = md5($password); // Cifrado de la contraseña
        $sql= "INSERT INTO clientes (nombre,email,password) VALUES ('$nombre','$email','$cifrado')"; // Consulta SQL
        $result = mysqli_query($db, $sql); // Se envía la consulta a la base de datos
        if($result){
            echo "<p class='alerta'>Registro exitoso</p>";
        }else{
            echo "<p class='alerta2'>Hubo un problema con el registro</p>";
        }
    }else{
        echo "<p class='alerta2'>Por favor rellene todos los campos</p>";
    }
}

?>