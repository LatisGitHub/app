<?php
class EnlaceBD
{
    public static function getEnlaces($id_regalo)
    {
        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        $stmt = $conexion->prepare("SELECT * from enlaces 
           WHERE id_regalo = ?");

        $stmt->bindValue(1, $id_regalo);

        $stmt->execute();

        //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
        $enlaces = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Enlace');

        ConexionBD::cerrar();

        return $enlaces;
    }




    public static function borrarEnlace($id)
    {
        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        $stmt = $conexion->prepare("DELETE FROM enlaces WHERE id  = ?");

        $stmt->bindValue(1, $id);

        $stmt->execute();
        ConexionBD::cerrar();
    }

    public static function insertarEnlace($nombre, $url, $precio, $imagen, $prioridad, $id_regalo)
    {
        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        //UPDATE table_name
        //SET column1 = value1, column2 = value2, ...
        //WHERE condition;
        $stmt = $conexion->prepare("INSERT INTO enlaces (nombre, url, precio, imagen, prioridad, id_regalo)
        VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bindValue(1, $nombre);
        $stmt->bindValue(2, $url);
        $stmt->bindValue(3, $precio);
        $stmt->bindValue(4, $imagen);
        $stmt->bindValue(5, $prioridad);
        $stmt->bindValue(6, $id_regalo);

        $stmt->execute();

        ConexionBD::cerrar();
    }
}
