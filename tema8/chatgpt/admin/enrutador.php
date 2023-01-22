<?php
    session_start();
    //session_destroy();

    //AUTOLOAD
    function autocarga($clase){ 
        $ruta = "./controladores/$clase.php"; 
        if (file_exists($ruta)){ 
          include_once $ruta; 
        }

        $ruta = "./modelos/$clase.php"; 
        if (file_exists($ruta)){ 
            include_once $ruta; 
        }

        $ruta = "./vistas/usuarios/$clase.php"; 
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
            //Mostrar series

            if ($_REQUEST['accion'] == "inicio") {
                ControladorLogin::mostrarFormularioLogin();
            }
    
            //Inicio - error de login
            if ($_REQUEST['accion'] == "error") {
                ControladorLogin::mostrarFormularioLoginError();
            }
            //CheckLogin
            if ($_REQUEST['accion'] == "checkLogin") {
                $email = filtrado($_REQUEST['email']);
                $password = filtrado($_REQUEST['password']);
                ControladorLogin::chequearLogin($email, $password);
            }
    
            if ($_REQUEST['accion'] == "mostrar") {
                ControladorChat::mostrarMenu();
            }
            //FUNCION GENERAR ARTICULO y MOSTRARLO
            if ($_REQUEST['accion'] == "generarArticulo") {
                $articulo = $_REQUEST['articulo'];
                ControladorChat::mostrarChat($articulo);
            }
            
            //FUNCION GUARDAR ARTICULO
            if ($_REQUEST['accion'] == "guardarArticulo") {
                //falta poner el request de texto y los demás
                $titulo = filtrado($_REQUEST['titulo']);
                $texto = $_REQUEST['texto'];
                $imagen = $_REQUEST['imagen'];
                
                $fechaNueva  = new DateTime(); 
                $fecha = $fechaNueva->format('d-m-Y');
                $krr    = explode('-', $fecha);
                $result = implode("/", $krr);
                             
                $articuloObjecto = new Articulo($id="",$titulo, $texto, $_SESSION['imagen'], $result);
               
                ControladorArticulo::guardarArticulo($articuloObjecto);
            }
            
            //funcion que muestra los articulos
            if ($_REQUEST['accion'] == "mostrarArticulos"){
                //$id_usuario = unserialize($_SESSION['usuario'])->getId();
                ControladorArticulo::mostrarArticulo();
            }
    
                

        }
    }





?>