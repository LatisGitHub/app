<?php
    require_once './vendor/autoload.php';
    use MongoDB\Client;


    class ConexionBD {

        private static $conexion;

        public static function conectar($bd="chat") {

            try {
                //CONEXIÓN A MONGODB CLOUD ATLAS. Comentar esta línea para conectar en local.
                $host = "mongodb+srv://latimongodb:passwordmongodb@cluster0.tobmmc3.mongodb.net/test";
                //$host = "mongodb://root:toor@mongo:27017/"; //MongoDB en Docker
                self::$conexion = (new Client($host))->{$bd};
            } catch (Exception $e){
                echo $e->getMessage();
            }
            return self::$conexion;

        }

        public static function cerrar() {
            self::$conexion = null;
        }


    }




?>