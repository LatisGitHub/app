
<?php

class ControladorPartida {


    public static function iniciarPartida() {

        $partida = new Partida();

        // Añadir dos cartas al Crupier
        $partida->getJugador()->nuevaCarta($partida->getBaraja()->repartirCarta());
        $partida->getJugador()->nuevaCarta($partida->getBaraja()->repartirCarta());
        
        $partida->getCrupier()->nuevaCarta($partida->getBaraja()->repartirCarta());
        $partida->getCrupier()->nuevaCarta($partida->getBaraja()->repartirCarta());



        // Imprimir partida
        echo $partida;
        echo "<br>jugador:" . $partida->getJugador()->valorMano() . "<br>";
        echo "crupier:" . $partida->getCrupier()->valorMano() . "<br>";
        echo '<button type="button"><a href="enrutador.php?accion=pedir" class="btn btn-danger">pedir</a>';
        echo '<button type="button"><a href="enrutador.php?accion=plantarse" class="btn btn-danger">plantarse</a>';


        
        //Serializar el objeto Partida y meterlo en la sesión
        $_SESSION['partida'] = serialize($partida);

    }






}






?>