<?php  
    class ControladorEnlace {

        public static function mostrarEnlaces($id_regalo) {
            $enlaces = EnlaceBD::getEnlaces($id_regalo);
            VistaEnlaces::render($enlaces);
        }

        public static function borrarEnlace($id) {
            EnlaceBD::borrarEnlace($id);
        }

        public static function insertarEnlace($nombre, $url, $precio, $imagen, $prioridad, $id_regalo){
            EnlaceBD::insertarEnlace($nombre, $url, $precio, $imagen, $prioridad, $id_regalo);
        }

    }
