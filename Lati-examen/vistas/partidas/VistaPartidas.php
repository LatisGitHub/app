<?php
class VistaPartidas
{
  public static function render($partidas)
  {

    include("cabecera2.php");

    echo '<table class="ml-2 ">';
    echo "<tr>";
    echo '<form action="enrutador.php" method="post"> 
                <td><label style="color:black"> CIUDAD </label></td>';
    echo '<td><input type="text" name="ciudad"></td>';
    echo "<input type='hidden' name='accion' value='busquedaCiudad'>";
    echo '<td><button type="submit"> BUSCAR </button></td>';
    echo '</form>';
    echo '<form action="enrutador.php" method="post">';
    echo '<td><label style="color:black" > FECHA </label></td>';
    echo '<td><input type="date" name="fecha">';
    echo "<input type='hidden' name='accion' value='busquedaFecha'>";
    echo '<td><button type="submit"> BUSCAR </button> </td>
      </form>';

    echo '<br>
            </tr>
            </table>';
    echo '<a class="btn btn-info mb-3" style="float: right" href="#" data-toggle="modal" data-target="#modalNuevaPartida">NUEVA PARTIDA</a>';
    echo "<table class='table table-striped' style='font-size: 15px;align-items: center;' id='dataTable' width='100%' cellspacing='0'>";
    //Cabecera
    echo "<tr>";
    echo "<th>" . strtoupper("fecha") . "</th>";
    echo "<th>" . strtoupper("hora") . "</th>";
    echo "<th>" . strtoupper("ciudad") . "</th>";
    echo "<th>" . strtoupper("lugar") . "</th>";
    echo "<th>" . strtoupper("cubierto") . "</th>";
    echo "<th>" . "ESTADO" . "</th>";
    echo "<th>" .  "BORRAR" . "</th>";
    echo "<th>" .  "DETALLE" . "</th>";
    echo "</tr>";


    //Contenido
    foreach ($partidas as $partida) {
        echo "<tr>";
        echo '<form action="enrutador.php" method="post"> ';
        echo '<td>'.$partida->getFecha().'</td>';
        echo '<td>'.$partida->getHora().'</td>';
        echo '<td>'.$partida->getCiudad().'</td>';
        echo '<td>'.$partida->getLugar().'</td>';
        if ($partida->getCubierto() == 1) {
            $cubierto = "SI";
        }else {
            $cubierto="NO";
        }
        echo '<td>'.$cubierto.'</td>';
        echo '<td>'.$partida->getEstado().'</td>';
        
        echo '<td><a href="enrutador.php?accion=borrarid&idborrar='. $partida->getId() . '" class="btn btn-danger">BORRAR</a> </td>';
        echo '<td><a href="enrutador.php?accion=verDetalle&id='. $partida->getId() . '" class="btn btn-success">DETALLE</a> </td>';
        echo "</tr>";
        echo "</form>";
    }
    echo "</table>";


    include("pie2.php");
  }

  



}
