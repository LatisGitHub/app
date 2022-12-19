<?php
class VistaPartidasDetalle
{
  public static function render($partida)
  {

    include("cabecera2.php");
    
    echo '<a class="btn btn-info mb-3" style="float: right" href="#" data-toggle="modal" data-target="#modalNuevaPartida">NUEVA PARTIDA</a>';
    echo "<div class='container-fluid'>";
    //Contenido

    echo '<div class="card" style="width: 18rem;">
    <h5 class="card-header">PARTIDA</h5>
              <div class="card-body">
                <p class="card-text">Fecha: ' . $partida->getFecha() . ' </p>
                <p class="card-text">Hora: ' . $partida->getHora() . ' </p>
                <p class="card-text">Ciudad: ' . $partida->getCiudad() . ' </p>
                <p class="card-text">Lugar: ' . $partida->getLugar() . ' </p>
                <p class="card-text">cubierto: ' . $partida->getCubierto() . '</p>
                <p class="card-text">Estado: ' . $partida->getEstado() . ' </p>
              </div>
            </div>';

            
    echo '<div class="card mt-2" style="width: 10rem; float=left">
            <h5 class="card-header">JUGADORES</h5>
            <div class="card-body">
              <p class="card-text"> Jugador 1: '. $partida->id_jugador1.'</p>
              <p class="card-text"> Jugador 2: '. $partida->id_jugador2. ' </p>
              <p class="card-text"> Jugador 3:  </p>
              <p class="card-text"> Jugador 4:  </p>
            </div>
          </div>';
          //si el estado está abierto se pinta el botón
          if ($partida->getEstado() == "abierta") {
            echo '<td><a href="enrutador.php?accion=apuntate" class="btn btn-primary mt-2">APUNTATE</a> </td>';
          }

    echo "</div>";

    include("pie2.php");
  }
}
