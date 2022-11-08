<?php 

if(!empty($_POST['submit'])){
    if(!empty($_POST['nombre']) and !empty($_POST['email']) and !empty($_POST['telefono']) and !empty($_POST['tipo']) and !empty($_POST['mensaje'])){
        $nombre=mysqli_real_escape_string($db, $_POST['nombre']);
        $email=mysqli_real_escape_string($db, $_POST['email']);
        $telefono=mysqli_real_escape_string($db, $_POST['telefono']);
        $tipo=mysqli_real_escape_string($db, $_POST['tipo']);
        $mensaje=mysqli_real_escape_string($db, $_POST['mensaje']);
        $sql= "INSERT INTO pqrs (nombre,email,telefono,tipo,mensaje) VALUES ('$nombre','$email','$telefono','$tipo','$mensaje')"; // Consulta SQL
        $result = mysqli_query($db, $sql); // Se envía la consulta a la base de datos
        if($result){
            echo "<p class='alerta'>Su PQRS ha sido enviado exitosamente</p>";
        }else{
            echo "<p class='alerta2'>Hubo un problema con el envío del PQRS</p>";
        }
    }else{
        echo "<p class='alerta2'>Por favor rellene todos los campos</p>";
    }
}

?>