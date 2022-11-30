<?php

class controladorPrestamo
{
    public static function mostrarPrestamo()
    {
        //LLamar al modelo para obtener todas las películas en un array de Pelicula
        $prestamos = PrestamoBD::getPrestamos();

        //Llamar a una vista para pintar esas películas
        VistaPrestamosTodos::render($prestamos);
    }


    public static function modificarPrestamos($id, $fecha_fin, $estado){
        PrestamoBD::modificarPrestamos($id, $fecha_fin, $estado);    
    }
   
    public static function pintarFormulario()
    {
        $libros = LibroBD::getLibros();
        $usuarios = UsuarioBD::getUsuarios(); 
        VistaNuevoPrestamo::formulario($usuarios, $libros);
    }

    public static function insertarPrestamo($idUsuario, $idLibro, $fecha_inicio, $fecha_fin, $estado){
        PrestamoBD::insertarPrestamo($idUsuario, $idLibro,$fecha_inicio, $fecha_fin, $estado);
    }

    public static function pintarBusquedaDNI($dni) {
        $prestamos = PrestamoBD::busquedaDNI($dni);
        VistaPrestamosTodos::render($prestamos);
    }

    public static function pintarBusquedaEstado($estado) {
        $prestamos = PrestamoBD::busquedaEstado($estado);
        VistaPrestamosTodos::render($prestamos);
    }
    public static function borrarPrestamo($id) {
        PrestamoBD::borrarPrestamo($id);
    }
}
