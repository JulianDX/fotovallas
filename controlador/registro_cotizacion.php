<?php 

$precio=0;

if(!empty($_POST['submit'])){
    if(!empty($_POST['fecha']) and !empty($_POST['nombre_empresa']) and !empty($_POST['email']) and !empty($_POST['telefono'])
    and !empty($_POST['material']) and !empty($_POST['tamano'])){
        $fecha=mysqli_real_escape_string($db, $_POST['fecha']);
        $nombre_empresa=mysqli_real_escape_string($db, $_POST['nombre_empresa']);
        $email=mysqli_real_escape_string($db, $_POST['email']);
        $telefono=mysqli_real_escape_string($db, $_POST['telefono']);
        $material=mysqli_real_escape_string($db, $_POST['material']);
        $tamano=mysqli_real_escape_string($db, $_POST['tamano']);
        $estructura=mysqli_real_escape_string($db, $_POST['estructura']);
        $nombre_imagen=$_FILES['foto']['name'];
        $temporal=$_FILES['foto']['tmp_name'];
        $carpeta='../vistas/img';
        $ruta=$carpeta.'/'.$nombre_imagen;
        move_uploaded_file($temporal,$carpeta.'/'.$nombre_imagen);

  if($estructura=='arana'){
    if($material=='banner'){
        $precio = 35000;
    }else{
        $precio = 45000;
    }
    if($tamano=='2x2'){
        $precio=$precio*4;
    }else if($tamano=='2x3'){
        $precio=$precio*6;
    }else{
        $precio=$precio*8;
    }
    $precio=$precio+70000;
    $precio=$precio+180000;
  }else{
    if($material=='acetato'){
        $precio = 120000;
    }else{
        $precio = 20000;
    }
    if($tamano=='1.90x0.86'){
        $precio=$precio*1.634;
    }else{
        $precio=$precio*3.12;
    }
    $precio=$precio+200000;
  } 
        
        $sql= "INSERT INTO cotizacion (fecha,empresa,email_contacto,telefono,material,tamano,url_imagen,precio,estado,tipo) VALUES ('$fecha','$nombre_empresa','$email','$telefono','$material','$tamano','$ruta',$precio,'PENDIENTE','$estructura')"; // Consulta SQL
        $result = mysqli_query($db, $sql); // Se envía la consulta a la base de datos      
        
        header('Location: ../vistas/miscotizaciones.php?registrada=true');
    }else{
        echo "<p class='alerta2'>Por favor rellene todos los campos</p>";
    }
}
