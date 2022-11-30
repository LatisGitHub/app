<?php
include_once('modelo.php');
include_once('lib.php');

//Acciones con GET
if ($_GET) {


    /*if (isset($_GET['insertarJuego'])) {
        $nombre = filtrado($_GET['nombre']);
        $descripcion = filtrado($_GET['descripcion']);
        $genero = filtrado($_GET['genero']);
        $plataforma = filtrado($_GET['plataforma']);    
        insertarJuego($nombre,$descripcion,$genero,$plataforma);

        header("Location: index.php");
    }*/

    if (isset($_GET['accion'])) {
        if ($_GET['accion'] == 'borrarJuego') {
            borrarPrestamo($_GET['id']);
            header("Location: index.php");
        }
    }

    if (isset($_GET['buscar'])) {
        $busqueda = filtrado($_GET['buscador']);
        $id = getUsuario($_SESSION['login']);
        $tareas = selectTareas($id,$busqueda);
        $tareasFinalizadas = selectTareasFinalizadas($id,$busqueda);
        pintarTareas($tareas, $tareasFinalizadas);
    }
}
?>