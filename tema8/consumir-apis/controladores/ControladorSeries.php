<?php
    class ControladorSeries {

        public static function mostrarSeries($pagina) {            
            VistaSeries::mostrarSeriesAPI($pagina);
        }

    }


?>