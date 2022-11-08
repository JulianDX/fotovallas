<!-- Conexión a la base de datos -->

<?php  
    
            $server = 'sql104.epizy.com';
            $username = 'epiz_32854319';
            $password = 'JNq5pV9m1sbfq';
            $dbname = 'epiz_32854319_fotovallas';       
            try {
                $db = mysqli_connect($server, $username, $password, $dbname);
                $db->set_charset("utf8");
            } catch (\Throwable $th) {
                echo 'No se pudo establecer conexión con la base de datos';
            }

?>