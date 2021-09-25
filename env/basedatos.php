<?php
class BaseDatos {

    public static function conexion() {
        
        try {
            $dsn = DB_DRIVER.":host=".DB_HOST.";dbname=".DB_NAME.";port=3306;charset=".DB_CHARSET;
            $usuario = DB_USER;
            $password = DB_PASSWORD;
            //Les recuerdo que para el reconocimiento de los errores de mysql, es que incorpormosr esta línea: 
            $opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

            $bd = new PDO($dsn,$usuario,$password,$opt);
            
            return $bd;
        
        } catch (PDOException $error) {
            echo "<h2>No me pude conectar con la Base de Datos...<br></h2>".$error->getMessage();
            exit;
        }
    }


}
