<?php session_start(); ?>
<?php include('lib.php'); ?>
<?php


    if ($_POST) {

        if (isset($_POST['empezar'])) {
            //Iniciar variables de sesión

            $_SESSION['numJugadores'] = $_POST['numeroJugadores'];
            $_SESSION['tambor'] = array();
            for($i=1; $i<100; $i++) {
                array_push($_SESSION['tambor'],$i);
            }

            for($i=0; $i < $_SESSION['numJugadores']; $i++) {
                $valor = 'carton'.$i;
                $_SESSION[$valor] = generarCarton();
            }

            header("Location: index.php?accion=inicio");

        }

    }




?>