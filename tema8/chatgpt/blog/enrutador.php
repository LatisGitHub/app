<?php
    session_start();
    //session_destroy();

    //AUTOLOAD
    function autocarga($clase){ 
        $ruta = "../admin/controladores/$clase.php"; 
        if (file_exists($ruta)){ 
          include_once $ruta; 
        }

        $ruta = "../admin/modelos/$clase.php"; 
        if (file_exists($ruta)){ 
            include_once $ruta; 
        }

       
        $ruta = "./vistas/chat/$clase.php"; 
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
           
            //funcion que muestra los articulos
            if ($_REQUEST['accion'] == "mostrarArticulos"){
                //$id_usuario = unserialize($_SESSION['usuario'])->getId();
                ControladorArticulo::mostrarArticulo();
            }
    
                

        }
    }





?>