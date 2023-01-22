<?php 
    class ControladorArticulo {
        
        public static function guardarArticulo($objetoArticulo) {
            ArticuloBD::insertarArticulo($objetoArticulo);
            VistaChatMenu::mostrarChatMenu();
        }
        public static function mostrarArticulo() {
            $articulos = ArticuloBD::getArticulos();
            //var_dump($articulos);
            VistaArticulos::pintarArticulos($articulos);
        }
    }


?>