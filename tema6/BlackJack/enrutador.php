<?php
    session_start();
    //session_destroy();

    //AUTOLOAD
    function autocarga($clase){ 
        $ruta = "./controlador/$clase.php"; 
        if (file_exists($ruta)){ 
          include_once $ruta; 
        }

        $ruta = "./modelo/$clase.php"; 
        if (file_exists($ruta)){ 
            include_once $ruta; 
        }
        $ruta = "$clase.php"; 
        if (file_exists($ruta)){ 
            include_once $ruta; 
        }

        $ruta = "./vista/$clase.php"; 
        if (file_exists($ruta)){ 
            include_once $ruta; 
        }
    } 
    spl_autoload_register("autocarga");


    //Función para filtrar los campos del formulario
    function filtrado($datos){
        $datos = trim($datos); // Elimina espacios antes y después de los datos
        $datos = stripslashes($datos); // Elimina backslashes \
        $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
        return $datos;
    }

    if ($_REQUEST) {
        if (isset($_REQUEST['accion'])) {

            //Inicio - Formulario Login
            if ($_REQUEST['accion'] == "inicio") {
                ControladorPartida::iniciarPartida();
            }

            if ($_REQUEST['accion'] == "pedir") {
                $partida = unserialize($_SESSION['partida']);
                ControladorPartida::pedir($partida);
            }



        }
    }





?>