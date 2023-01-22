<?php
    class ControladorChat {

        public static function mostrarChat($texto) {            
            VistaChat2::mostrarArticulo2($texto);
        }

        public static function mostrarMenu() {            
            VistaChatMenu::mostrarChatMenu();
        }


    }


?>