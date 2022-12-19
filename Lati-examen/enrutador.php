<?php
session_start();
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

    $ruta = "./vistas/partidas/$clase.php";
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

        if ($_REQUEST['accion'] == "inicio") {
            ControladorLogin::mostrarFormularioLogin();
        }

        //Inicio - error de login
        if ($_REQUEST['accion'] == "error") {
            ControladorLogin::mostrarFormularioLoginError();
        }

        //Mostrar partidas
        if ($_REQUEST['accion'] == "mostrar") {
            $id_usuario = unserialize($_SESSION['usuario'])->getId();
            ControladorPartida::mostrarPartida();
        }

        //CheckLogin
        if ($_REQUEST['accion'] == "checkLogin") {
            $email = filtrado($_REQUEST['email']);
            $password = filtrado($_REQUEST['password']);
            ControladorLogin::chequearLogin($email, $password);
        }
        //borra id
        if ($_REQUEST['accion'] == "borrarid") {
            $id = filtrado($_REQUEST['idborrar']);
            ControladorPartida::borrarPartida($id);
        }
        //muestra en detalle las partidas con sus correspondientes jugadores
        if ($_REQUEST['accion'] == "verDetalle") {
            $id = filtrado($_REQUEST['id']);
            ControladorPartida::verDetalle2($id);
           
            //almacenado para apuntarse
            $_SESSION['id_partida'] = $id;

        }
        //muestra las partidas de una determinada ciudad
        if ($_REQUEST['accion'] == "busquedaCiudad") {
            $ciudad = filtrado($_REQUEST['ciudad']);
            ControladorPartida::busquedaCiudad($ciudad);
        }
       
        //muestra las partidas de una determinada fecha, FALTA ARREGLAR
        if ($_REQUEST['accion'] == "busquedaFecha") {
            $fecha = filtrado($_REQUEST['fecha']);
            ControladorPartida::busquedaFecha($fecha);
        }

        //Inserta una nueva partida, que está abierta directamente y tiene agregado el jugador del login
        if ($_REQUEST['accion'] == "crearPartida") {
            $fecha = filtrado($_REQUEST['fecha']);
            $hora = filtrado($_REQUEST['hora']);
            $ciudad = filtrado($_REQUEST['ciudad']);
            $lugar = filtrado($_REQUEST['lugar']);
            $cubierto = filtrado($_REQUEST['cubierto']);
            $estado = filtrado($_REQUEST['estado']);
            $id_jugador1 = unserialize($_SESSION['usuario'])->getId();
            ControladorPartida::insertarPartida($fecha, $hora, $ciudad, $lugar, $cubierto, $estado, $id_jugador1);
        }

        if ($_REQUEST['accion'] == 'apuntate') {
            $id_jugador = unserialize($_SESSION['usuario'])->getId();
            $id_partida = $_SESSION['id_partida'];
            ControladorPartida::apuntarse($id_jugador, $id);
        }

        
    }
}
