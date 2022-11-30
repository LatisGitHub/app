<?php

class PrestamoBD
{

    public static function getPrestamos()
    {
        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        $stmt = $conexion->prepare("SELECT prestamos.id, prestamos.idUsuario, prestamos.idLibro, libros.titulo, prestamos.fecha_inicio, prestamos.fecha_fin, 
       usuarios.nombre, libros.isbn, prestamos.estado 
       FROM prestamos, usuarios, libros 
       WHERE prestamos.idUsuario = usuarios.id 
       and prestamos.idLibro = libros.id");


        $stmt->execute();

        //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
        $prestamos = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Prestamo');

        ConexionBD::cerrar();

        return $prestamos;
    }

    //mas metodos get

    public static function modificarPrestamos($id, $fecha_fin, $estado)
    {
        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        //UPDATE table_name
        //SET column1 = value1, column2 = value2, ...
        //WHERE condition;
        $stmt = $conexion->prepare("UPDATE prestamos 
       SET fecha_fin = ?, 
        estado = ? 
       WHERE  
       id = ?");
        $stmt->bindValue(1, $fecha_fin);
        $stmt->bindValue(2, $estado);
        $stmt->bindValue(3, $id);


        $stmt->execute();

        //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD

        ConexionBD::cerrar();
    }

    public static function insertarPrestamo($idUsuario, $idLibro, $fecha_inicio, $fecha_fin, $estado)
    {
        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        //UPDATE table_name
        //SET column1 = value1, column2 = value2, ...
        //WHERE condition;
        $stmt = $conexion->prepare("INSERT INTO prestamos (idUsuario, idLibro, fecha_inicio, fecha_fin, estado)
        VALUES (?, ?, ?, ?, ?)");
        $stmt->bindValue(1, $idUsuario);
        $stmt->bindValue(2, $idLibro);
        $stmt->bindValue(3, $fecha_inicio);
        $stmt->bindValue(4, $fecha_fin);
        $stmt->bindValue(5, $estado);

        $stmt->execute();

        //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD

        ConexionBD::cerrar();
    }

    public static function busquedaDNI($dni) {
        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        $stmt = $conexion->prepare("SELECT prestamos.id, prestamos.idUsuario, prestamos.idLibro, libros.titulo, prestamos.fecha_inicio, prestamos.fecha_fin, 
       usuarios.nombre, libros.isbn, prestamos.estado 
       FROM prestamos, usuarios, libros 
       WHERE prestamos.idUsuario = usuarios.id 
       and prestamos.idLibro = libros.id
       and usuarios.dni = ?");

        $stmt->bindValue(1, $dni);

        $stmt->execute();

        //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
        $prestamos = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Prestamo');

        ConexionBD::cerrar();

        return $prestamos;
    }

    public static function busquedaEstado($estado) {
        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        $stmt = $conexion->prepare("SELECT prestamos.id, prestamos.idUsuario, prestamos.idLibro, libros.titulo, prestamos.fecha_inicio, prestamos.fecha_fin, 
       usuarios.nombre, libros.isbn, prestamos.estado 
       FROM prestamos, usuarios, libros 
       WHERE prestamos.idUsuario = usuarios.id 
       and prestamos.idLibro = libros.id
       and prestamos.estado = ?");

        $stmt->bindValue(1, $estado);

        $stmt->execute();

        //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
        $prestamos = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Prestamo');

        ConexionBD::cerrar();

        return $prestamos;
    }

    public static function borrarPrestamo($id) {
        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        $stmt = $conexion->prepare("DELETE FROM prestamos WHERE id  = ?");

        $stmt->bindValue(1, $id);

        $stmt->execute();

        //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
       
        ConexionBD::cerrar();

    }
}
