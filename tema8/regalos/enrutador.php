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

    $ruta = "./vistas/regalos/$clase.php";
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

        //Mostrar noticias
        if ($_REQUEST['accion'] == "mostrar") {
            $id_usuario = unserialize($_SESSION['usuario'])->getId();
            ControladorRegalo::mostrarRegalos($id_usuario);
        }

        //CheckLogin
        if ($_REQUEST['accion'] == "checkLogin") {
            $email = filtrado($_REQUEST['email']);
            $password = filtrado($_REQUEST['password']);
            ControladorLogin::chequearLogin($email, $password);
        }

        if ($_REQUEST['accion'] == "borrarid") {
            $id = $_REQUEST['id'];
            ControladorRegalo::borrarRegalo($id);
            $id_usuario = unserialize($_SESSION['usuario'])->getId();
            ControladorRegalo::mostrarRegalos($id_usuario);
            //ControladorRegalo::mostrarRegalosAjax();
        }

        if ($_REQUEST['accion'] == "crearRegalo") {
            $nombre = filtrado($_REQUEST['nombre']);
            $destinatario = filtrado($_REQUEST['destinatario']);
            $precio = filtrado($_REQUEST['precio']);
            $estado = filtrado($_REQUEST['estado']);
            $anio = filtrado($_REQUEST['anio']);
            $id_usuario = unserialize($_SESSION['usuario'])->getId();

           ControladorRegalo::insertarRegalo($nombre, $destinatario, $precio, $estado, $anio, $id_usuario);
           ControladorRegalo::mostrarRegalos($id_usuario);
           //ControladorRegalo::mostrarRegalosAjax();
        }


        if ($_REQUEST['accion'] == "modificar") {
            $id = $_REQUEST['id'];
            $nombre = filtrado($_REQUEST['nombre']);
            $destinatario = filtrado($_REQUEST['destinatario']);
            $precio = filtrado($_REQUEST['precio']);
            $estado = filtrado($_REQUEST['estado']);
            $anio = filtrado($_REQUEST['anio']);
            ControladorRegalo::modificarRegalo($nombre, $destinatario, $precio, $estado, $anio, $id);
            $id_usuario = unserialize($_SESSION['usuario'])->getId();
            ControladorRegalo::mostrarRegalos($id_usuario);
            //ControladorRegalo::mostrarRegalosAjax();
        }

        if ($_REQUEST['accion'] == "busquedaYEAR"){
            $year = $_REQUEST['year'];
            $id_usuario = unserialize($_SESSION['usuario'])->getId();

            controladorRegalo::BusquedaYear($year, $id_usuario);
        }

        if ($_REQUEST['accion'] == "verEnlaces") {
            $id_regalo= $_REQUEST['id'];
            ControladorEnlace::mostrarEnlaces($id_regalo);
        }

        if ($_REQUEST['accion'] == "borrarenlace") {
            $id = $_REQUEST['id'];
            ControladorEnlace::borrarEnlace($id);
            ControladorEnlace::mostrarEnlaces($_REQUEST["regalo"]);
            //ControladorEnlace::borrarEnlace($id, $id_regalo);
            //ControladorRegalo::mostrarRegalosAjax();
        }
       
        if ($_REQUEST['accion'] == "crearEnlace") {
            $nombre = $_REQUEST['nombre'];
            $url = $_REQUEST['url'];
            $precio = $_REQUEST['precio'];
            $imagen = $_REQUEST['imagen'];
            $prioridad = $_REQUEST['prioridad'];
            $id_regalo = $_REQUEST['id_regalo'];
            ControladorEnlace::insertarEnlace($nombre, $url, $precio, $imagen, $prioridad, $id_regalo);
            ControladorEnlace::mostrarEnlaces($id_regalo);

        }
       
       


    }
}
