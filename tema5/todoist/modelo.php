<?php 

    function conexionBD(){
        //se crea una conexion nueva a bbdd
        $dbh = null;
        try {
            //mariadb es el nombre del contenedor donde tengamos mysql
            $dsn = "mysql:host=mariaDB;dbname=todoist";
            $dbh = new PDO($dsn, "usuario", "usuario");
        } catch (PDOException $e){
            echo $e->getMessage();
        }

        return $dbh;
               
    }


    function existeUsuario($login){
        $conexion = conexionBD();
        
        $conexion = null; //cerrar la conexion
    }



?>