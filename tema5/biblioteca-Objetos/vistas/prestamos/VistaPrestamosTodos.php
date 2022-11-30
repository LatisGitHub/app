<?php

class VistaPrestamosTodos
{

  public static function render($prestamos)
  {

    include_once("./plantilla/cabecera.php");

    echo '<table class="ml-2">';
    echo "<tr>";
    echo '<form action="enrutador.php" method="post"> 
          <td><label style="color:black"> DNI </label></td>';
    echo '<td><input type="text" name="dni"></td>';
    echo "<input type='hidden' name='accion' value='busquedaDNI'>";
    echo '<td><button type="submit"> BUSCAR </button></td>';
    echo '</form>';
    echo '<form action="enrutador.php" method="post">';
    echo '<td><label style="color:black"" > ESTADO </label></td>';
    echo '<td><select name="estado" id="estado">
            <option value="ACTIVO">ACTIVO</option>
            <option value="DEVUELTO">DEVUELTO</option>
            <option value="SOBREPASADO1MES">SOBREPASADO 1 MES</option>
            <option value="SOBREPASADO1YEAR">SOBREPASADO 1 YEAR</option></td>
        </select> ';
    echo "<input type='hidden' name='accion' value='busquedaEstado'>";
    echo '<td><button type="submit"> BUSCAR </button> </td>
      </form>
      <br>
      </tr>
      </table>';
    echo '<a href="enrutador.php?accion=nuevoPrestamo" class="btn btn-info mb-3" style="float: right">Nuevo Prestamo</a><br>';
    echo '<table class="table table-striped">';

    echo "<thead class='table-dark'>";
    echo "<tr>";
    echo "<td>" . strtoupper("Ejemplar") . "</td>";
    echo "<td>" . strtoupper("Libro") . "</td>";
    echo "<td>" . strtoupper("Cliente") . "</td>";
    echo "<td>" . strtoupper("Fecha Inicio") . "</td>";
    echo "<td>" . strtoupper("Fecha Fin") . "</td>";
    echo "<td>" . strtoupper("ESTADO ") . "</td>";
    echo "<td>" . "" . "</td>";
    echo "<td>" .  "" . "</td>";


    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";;


    foreach ($prestamos as $prestamo) {
      echo "<tr>";
      echo "<td>" . $prestamo->isbn . "</td>";
      echo "<td>" . $prestamo->titulo . "</td>";
      echo "<td>" . $prestamo->nombre . "</td>";
      echo "<td>" . $prestamo->getFecha_inicio() . "</td>";
      echo '<form action="enrutador.php" method="post"> 
            <td>  
            <input type="date" name="fecha_fin" value= "' . $prestamo->getFecha_fin() . '" >  
            </td> 
            <td> 
            <select name="estado" id="estado">
              <selected> <option value="' . $prestamo->getEstado() . '"> ' . $prestamo->getEstado() . '</option>
              <option value="ACTIVO">ACTIVO</option>
              <option value="DEVUELTO">DEVUELTO</option>
              <option value="SOBREPASADO1MES">SOBREPASADO 1 MES</option>
              <option value="SOBREPASADO1YEAR">SOBREPASADO 1 YEAR</option>
            </select> 
             <input type="hidden" name="id" value="' . $prestamo->getId() . '" >
          ';
      echo " <td> <input type='hidden' name='accion' value='modificar'>";
      echo " <button class='btn btn-info' type='submit'>MODIFICAR</button></td>";
      echo '<td><a href="enrutador.php?accion=borrarid&id='. $prestamo->getId() . '" class="btn btn-danger">BORRAR</a> </td>';


      echo '</form> 
          </td>';

      //echo '<td><a href="controlador.php?accion=borrarid&id=' .  "" . '" class="btn btn-primary">BORRAR</a> </td>';, tiene que estar fuera del form

      //echo '<td><a href="enrutador.php?accion=modificar&id=' . $prestamo->getId()  . '" class="btn btn-primary">MODIFICAR</a> </td>';
      echo "</tr>";
    }
    echo '</tbody>';
    echo "</table>";

    include("./plantilla/pie.php");
  }
}
