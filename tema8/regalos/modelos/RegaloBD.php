<?php
class RegaloBD
{

    public static function getRegalos($id_usuario)
    {
        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        $stmt = $conexion->prepare("SELECT * FROM regalos WHERE id_usuario = ?");

        $stmt->bindValue(1, $id_usuario);

        $stmt->execute();

        $regalos = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Regalo');

        ConexionBD::cerrar();

        return $regalos;
    }



    public static function modificarRegalo($nombre, $destinatario, $precio, $estado, $anio, $id) {
        $conexion = ConexionBD::conectar();

        $stmt = $conexion->prepare("UPDATE regalos
        SET nombre = ?, destinatario = ?, precio = ?, estado = ?, anio = ?
        WHERE id = ?");
        
        $stmt->bindValue(1, $nombre);
        $stmt->bindValue(2, $destinatario);
        $stmt->bindValue(3, $precio);
        $stmt->bindValue(4, $estado);
        $stmt->bindValue(5, $anio);
        $stmt->bindValue(6, $id);

        $stmt->execute();

        ConexionBD::cerrar();

    }

    public static function insertarRegalo($nombre, $destinatario, $precio, $estado, $anio, $id_usuario)
    {
        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        //UPDATE table_name
        //SET column1 = value1, column2 = value2, ...
        //WHERE condition;
        $stmt = $conexion->prepare("INSERT INTO regalos (nombre, destinatario, precio, estado, anio, id_usuario)
        VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bindValue(1, $nombre);
        $stmt->bindValue(2, $destinatario);
        $stmt->bindValue(3, $precio);
        $stmt->bindValue(4, $estado);
        $stmt->bindValue(5, $anio);
        $stmt->bindValue(6, $id_usuario);

        $stmt->execute();

        ConexionBD::cerrar();
    }

    public static function borrarRegalo($id) {
        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        $stmt = $conexion->prepare("DELETE FROM regalos WHERE id  = ?");

        $stmt->bindValue(1, $id);

        $stmt->execute();       
        ConexionBD::cerrar();

    }

    public static function busquedaYear($year, $id_usuario) {
        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        $stmt = $conexion->prepare("SELECT * from regalos WHERE anio = ? and id_usuario = ?");
        $stmt->bindValue(1, $year);
        $stmt->bindValue(2, $id_usuario);


        $stmt->execute();

        //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
        $regalos = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Regalo');

        ConexionBD::cerrar();

        return $regalos;
    }

   
}
