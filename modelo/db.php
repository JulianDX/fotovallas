<!-- Conexión a la base de datos -->

<?php  
    
            $server = 'us-cdbr-east-06.cleardb.net';
            $username = 'b7ee7f9643ea37';
            $password = 'cbb803d8';
            $dbname = 'heroku_4ec46ed82b71fb3';       
            try {
                $db = mysqli_connect($server, $username, $password, $dbname);
                $db->set_charset("utf8");
            } catch (\Throwable $th) {
                echo 'No se pudo establecer conexión con la base de datos';
            }

?>