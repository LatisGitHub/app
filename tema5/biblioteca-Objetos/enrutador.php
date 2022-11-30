<?php
function autocarga($clase)
{
    $ruta = "./controladores/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "./modelos/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "./vistas/prestamos/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "./vistas/criticas/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "./vistas/usuarios/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }
}

spl_autoload_register("autocarga");

//Función para filtrar los campos del formulario
function filtrado($datos)
{
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes \
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
}

if ($_REQUEST) {
    if (isset($_REQUEST['accion'])) {

        //Inicio
        if ($_REQUEST['accion'] == "inicio") {
            ControladorPrestamo::mostrarPrestamo();
        }

        if ($_REQUEST['accion'] == "modificar") {
            $id = $_REQUEST['id'];
            $estado = $_REQUEST['estado'];
            $fecha_fin = $_REQUEST['fecha_fin'];
            ControladorPrestamo::modificarPrestamos($id, $fecha_fin, $estado);
            echo '<script>window.location="' . "enrutador.php?accion=inicio" . '"</script>';
        }
        if ($_REQUEST['accion'] == "nuevoPrestamo") {
            ControladorPrestamo::pintarFormulario();
        }
        if ($_REQUEST['accion'] == "insertarPrestamo") {
            $idLibro = $_REQUEST['idLibro'];
            $idUsuario = $_REQUEST['idUsuario'];
            $fecha_inicio = $_REQUEST['fecha_inicio'];
            $fecha_fin = $_REQUEST['fecha_fin'];
            $estado = $_REQUEST['estado'];
            ControladorPrestamo::insertarPrestamo($idLibro, $idUsuario, $fecha_inicio, $fecha_fin, $estado);
            echo '<script>window.location="' . "enrutador.php?accion=inicio" . '"</script>';

        }
        if ($_REQUEST['accion'] == "busquedaDNI"){
            $dni = $_REQUEST['dni'];
            ControladorPrestamo::pintarBusquedaDNI($dni);
        }

        if ($_REQUEST['accion'] == "busquedaEstado"){
            $estado = $_REQUEST['estado'];
            ControladorPrestamo::pintarBusquedaEstado($estado);
        }
        if ($_REQUEST['accion'] == "borrarid"){
            $id = $_REQUEST['id'];
            ControladorPrestamo::borrarPrestamo($id);
            echo '<script>window.location="' . "enrutador.php?accion=inicio" . '"</script>';

        }
    }
}
