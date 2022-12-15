<?php
class VistaRegalos
{
  public static function render($regalos)
  {

    include("cabecera2.php");

    echo '<table class="ml-2 ">';
    echo "<tr>";
    echo '<form action="enrutador.php" method="post"> 
                <td><label style="color:black"> YEAR </label></td>';
    echo '<td><input type="text" name="year"></td>';
    echo "<input type='hidden' name='accion' value='busquedaYEAR'>";
    echo '<td><button type="submit"> BUSCAR </button></td>';
    echo '</form>';

    echo '<br>
            </tr>
            </table>';
    echo '<a class="btn btn-info mb-3" style="float: right" href="#" data-toggle="modal" data-target="#modalNuevoRegalo">NUEVO REGALO</a>';
    echo '<a href="enrutador.php?accion=pdf" class="btn btn-danger">PDF</a>';
    echo "<table class='table table-striped' style='font-size: 15px;align-items: center;' id='dataTable' width='100%' cellspacing='0'>";
    //Cabecera
    echo "<tr>";
    echo "<th>" . strtoupper("nombre") . "</th>";
    echo "<th>" . strtoupper("destinatario") . "</th>";
    echo "<th>" . strtoupper("precio") . "</th>";
    echo "<th>" . strtoupper("estado") . "</th>";
    echo "<th>" . strtoupper("year") . "</th>";
    echo "<th>" . "" . "</th>";
    echo "<th>" .  "" . "</th>";
    echo "<th>" .  "" . "</th>";
    echo "</tr>";


    //Contenido
    foreach ($regalos as $regalo) {
        echo "<tr>";
        echo '<form action="enrutador.php" method="post"> ';
        echo '<td><input type="text" name="nombre" value="'.$regalo->getNombre().'"class="form-control"></td>';
        echo '<td><input type="text" name="destinatario" value="'.$regalo->getDestinatario().'"class="form-control"></td>';
        echo '<td><input type="number" min="1" name="precio" value="'.$regalo->getPrecio().'"class="form-control"></td>';

        echo '<td> 
                  <select name="estado" id="estado">
                    <selected> <option value="' . $regalo->getEstado() . '"> ' . $regalo->getEstado() . '</option>
                    <option value="PENDIENTE">PENDIENTE</option>
                    <option value="COMPRADO">COMPRADO</option>
                    <option value="ENVUELTO">ENVUELTO</option>
                    <option value="ENTREGADO">ENTREGADO</option>
                  </select> 
                   <input type="hidden" name="id" value="' . $regalo->getId() . '" >
                   </td>
                ';
        echo '<td><input type="text" name="anio" value="'.$regalo->getAnio().'"class="form-control"></td>';

       
        
        //IdRegalo Modificar
        echo " <td> <input type='hidden' name='accion' value='modificar'>";
        echo " <button class='btn btn-info' type='submit'>MODIFICAR</button></td>";
        echo '<td><a href="enrutador.php?accion=borrarid&idborrar='. $regalo->getId() . '" class="btn btn-danger">BORRAR</a> </td>';
        echo '<td><a href="enrutador.php?accion=verEnlaces&idregalo='. $regalo->getId() . '" class="btn btn-success">VER EN TIENDA</a> </td>';
        echo "</tr>";
        echo "</form>";
    }
    echo "</table>";


    include("pie2.php");
  }

  public static function renderAjax($regalos) {
         
    echo '<table class="ml-2">';
    echo "<tr>";
    echo '<form action="enrutador.php" method="post"> 
                <td><label style="color:black"> YEAR </label></td>';
    echo '<td><input type="text" name="year"></td>';
    echo "<input type='hidden' name='accion' value='busquedaYEAR'>";
    echo '<td><button type="submit"> BUSCAR </button></td>';
    echo '</form>';

    echo '<br>
            </tr>
            </table>';
    echo '<a class="btn btn-info mb-3" style="float: right" href="#" data-toggle="modal" data-target="#modalNuevoRegalo">NUEVO REGALO</a>';
    echo '<table class="table table-striped">';

    echo "<thead class='table-dark'>";
    echo "<tr>";
    echo "<td>" . strtoupper("nombre") . "</td>";
    echo "<td>" . strtoupper("destinatario") . "</td>";
    echo "<td>" . strtoupper("precio") . "</td>";
    echo "<td>" . strtoupper("estado") . "</td>";
    echo "<td>" . strtoupper("year") . "</td>";
    echo "<td>" . "" . "</td>";
    echo "<td>" .  "" . "</td>";


    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";;


    foreach ($regalos as $regalo) {
      echo '<form action="enrutador.php" method="post"> ';
      echo "<tr>";
      echo "<td> <input name='nombre' type=text value='" . $regalo->getNombre() . "' >  </td>";
      echo "<td> <input name='destinatario' type=text value='" . $regalo->getDestinatario() . "' > </td>";
      echo "<td> <input name='precio' type=text value='" . $regalo->getPrecio() . "' > </td>";
      echo '<td> 
                  <select name="estado" id="estado">
                    <selected> <option value="' . $regalo->getEstado() . '"> ' . $regalo->getEstado() . '</option>
                    <option value="PENDIENTE">PENDIENTE</option>
                    <option value="COMPRADO">COMPRADO</option>
                    <option value="ENVUELTO">ENVUELTO</option>
                    <option value="ENTREGADO">ENTREGADO</option>
                  </select> 
                   <input type="hidden" name="id" value="' . $regalo->getId() . '" >
                   </td>
                ';
      echo "<td> <input name='anio' type=text value='" . $regalo->getAnio() . "' > </td>";
      echo " <td> <input type='hidden' name='accion' value='modificar'>";
      echo " <button class='btn btn-info' type='submit'>MODIFICAR</button></td>";
      echo " <td><button id='borrarRegalo' accion='borrar' value='{$regalo->getId()}' class='btn btn-primary'>BORRAR</button></td>";


      echo '</form> 
                </td>';

      //echo '<td><a href="controlador.php?accion=borrarid&id=' .  "" . '" class="btn btn-primary">BORRAR</a> </td>';, tiene que estar fuera del form

      //echo '<td><a href="enrutador.php?accion=modificar&id=' . $regalo->getId()  . '" class="btn btn-primary">MODIFICAR</a> </td>';
      echo "</tr>";
    }
    echo '</tbody>';
    echo "</table>";



}



}
