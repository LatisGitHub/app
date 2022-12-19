<?php 
class VistaPartida{


    public static function pintarPartida($partida) {

        $partida = $_SESSION['partida'];
        echo $partida;

        echo "<br>jugador:" . $partida->getJugador()->valorMano() . "<br>";
        echo "crupier:" . $partida->getCrupier()->valorMano() . "<br>";
        echo '<button type="button"><a href="enrutador.php?accion=pedir" class="btn btn-danger">pedir</a>';
        echo '<button type="button"><a href="enrutador.php?accion=plantarse" class="btn btn-danger">plantarse</a>';
        
    }






}



?>