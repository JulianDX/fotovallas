<!-- Conexión a la base de datos -->

<?php  
    
            $server = 'us-east.connect.psdb.cloud';
            $username = '784rxx4ieqbjxyn1za4a';
            $password = 'pscale_pw_fNx3q86KWJbgh8h9CE6O8MnGGyKqKFAxz7U3OOAm1ea';
            $dbname = 'fotovallas';       
            try {
                $db = mysqli_connect($server, $username, $password, $dbname);
                $db->set_charset("utf8");
            } catch (\Throwable $th) {
                echo 'No se pudo establecer conexión con la base de datos';
            }

?>