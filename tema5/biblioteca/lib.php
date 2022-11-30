<?php include('modelo.php'); ?>
<?php
//Función para limpiar los input de los formularios
function filtrado($datos)
{
  $datos = trim($datos); // Elimina espacios antes y después de los datos
  $datos = stripslashes($datos); // Elimina backslashes \
  $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
  return $datos;
}

function pintarPrestamos()
{


  $prestamos = selectPrestamos();


  echo '<table class="table table-striped">';
  echo "<thead>";
  echo "<tr>";
  echo "<td>" . strtoupper("ejemplar") . "</td>";
  echo "<td>" . strtoupper("libro") . "</td>";
  echo "<td>" . strtoupper("cliente") . "</td>";
  echo "<td>" . strtoupper("inicio") . "</td>";
  echo "<td>" . strtoupper("fin") . "</td>";
  echo "<td>" . strtoupper(" ") . "</td>";
  echo "<td>" . strtoupper(" ") . "</td>";

  echo "</tr>";
  echo "</thead>";
  echo "<tbody>";;


  foreach ($prestamos as $p) {
    echo "<tr>";

    foreach (nombreUsuario($p["idUsuario"]) as $valor) {
      echo "<td>" . $valor['nombre'] . "</td>";
    }


    echo "<td>" . $p['idUsuario'] . "</td>";
    foreach (tituloLibro($p["idLibro"]) as $valor) {
      echo "<td>" . $valor['titulo'] . "</td>";
    }
    echo "<td>" . $p['fecha_inicio'] . "</td>";
    echo "<td>" . $p['fecha_fin'] . "</td>";

    echo '<td><a href="controlador.php?accion=finalizar&id=' . $p['id'] . '" class="btn btn-primary">FINALIZAR</a> </td>';
    echo '<td><a href="controlador.php?accion=borrarid&id=' . $p['id'] . '" class="btn btn-primary">BORRAR</a> </td>';

    /*echo '<td><a href="controlador.php?accion=info&id='. $l['id'] .'" class="btn btn-primary">INFO</a> </td>';*/
    echo "</tr>";
  }
  echo '</tbody>';
  echo "</table>";
}





?>