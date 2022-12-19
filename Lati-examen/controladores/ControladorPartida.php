<?php 

    class ControladorPartida {
        public static function mostrarPartida() {
            $partidas = PartidaBD::getPartidas();
            VistaPartidas::render($partidas);
        }
        public static function borrarPartida($id) {
            PartidaBD::borrarPartida($id);
            $partidas = PartidaBD::getPartidas();
            VistaPartidas::render($partidas);
            echo "<script>window.location='enrutador.php?accion=mostrar';</script>";
        }
        //ver detalle sin jugadores (mas limpio y bonito)
        public static function verDetalle($id) {
            $partida = PartidaBD::getUnaPartida($id);
            VistaPartidasDetalle::render($partida);
        }

        //ver detalle con los jugadores
        public static function verDetalle2($id) {
            $partida = PartidaBD::getUnaPartida($id);
            $primerJugador = PartidaBD::getJugador($partida->id_jugador1);
            $segundoJugador = PartidaBD::getJugador($partida->id_jugador2);
            $tercerJugador = PartidaBD::getJugador($partida->id_jugador3);
            $cuartoJugador = PartidaBD::getJugador($partida->id_jugador4);
            VistaPartidasDetalleConJugadores::render($partida, $primerJugador, $segundoJugador, $tercerJugador, $cuartoJugador);
        }
        public static function busquedaCiudad($ciudad){
            $partidas = PartidaBD::getPartidasCiudad($ciudad);
            VistaPartidas::render($partidas);
        }
        public static function busquedaFecha($fecha){
            $partidas = PartidaBD::getPartidasFecha($fecha);
            VistaPartidas::render($partidas);
        }
        //inserta una nueva partida
        public static function insertarPartida($fecha, $hora, $ciudad, $lugar, $cubierto, $estado, $id_jugador1){
            PartidaBD::insertarPartida($fecha, $hora, $ciudad, $lugar, $cubierto, $estado, $id_jugador1);
            echo '<script>window.location="' . "enrutador.php?accion=mostrar" . '"</script>';
        }
        
        //apuntarse
        public static function apuntarse($id_jugador, $id_partida){
            PartidaBD::apuntarse($id_jugador, $id_partida);
            $partida = PartidaBD::getUnaPartida($id_partida);
            $jugador1 = $partida->id_jugador1;
            $jugador2 = $partida->id_jugador2;
            $jugador3 = $partida->id_jugador3;
            $jugador4 = $partida->id_jugador4;
          
            if ($jugador1 != null){
                PartidaBD::apuntarse($jugador1, $id_partida);
            }
        }
    }


?>