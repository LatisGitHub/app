<?php include("cabecera.php"); ?>

<?php //session_destroy(); 
?>
<?php


$proyectos = array(
    array(
        "id" => 0, "nombre" => "proyecto php", "fechaInicio" => "01/01/2022", "fechaFinPrevista" => "02/04/2022",
        "diasTranscurridos" => "10", "porcentajeCompletado" => "20", "importancia" => 5
    ),
    array(
        "id" => 1, "nombre" => "proyecto js", "fechaInicio" => "01/03/2022", "fechaFinPrevista" => "02/05/2022",
        "diasTranscurridos" => "5", "porcentajeCompletado" => "5", "importancia" => 2
    ),
    array(
        "id" => 2, "nombre" => "proyecto mysql", "fechaInicio" => "01/01/2022", "fechaFinPrevista" => "02/02/2022",
        "diasTranscurridos" => "10", "porcentajeCompletado" => "80", "importancia" => 4
    )

);

//Metemos en la sesión todos los productos
if (!isset($_SESSION['proyectos']))
    $_SESSION['proyectos'] = $proyectos;

echo '<table class="table table-striped">';
echo "<thead>";
echo "<tr>";
echo "<td>" . strtoupper("nombre") . "</td>";
echo "<td>" . strtoupper("fecha inicio") . "</td>";
echo "<td>" . strtoupper("fecha fin") . "</td>";
echo "<td>" . strtoupper("dias transcurridos") . "</td>";
echo "<td>" . strtoupper("porcentaje completado") . "</td>";
echo "<td>" . strtoupper("importancia") . "</td>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";;


foreach ($_SESSION['proyectos'] as $value => $pr ) {
    echo "<tr>";
    echo "<td>" . $pr["nombre"] . "</td>";
    echo "<td>" . $pr["fechaInicio"] . "</td>";
    echo "<td>" . $pr["fechaFinPrevista"] . "</td>";
    echo "<td>" . $pr["diasTranscurridos"] . "</td>";
    echo "<td>" . $pr["porcentajeCompletado"] . "</td>";
    echo "<td>" . $pr["importancia"] . "</td>";
    echo '<td><a href="controlador.php?accion=borrarid&id='. $pr['id'] . '" class="btn btn-primary">BORRAR</a> </td>';
    echo '<td><a href="controlador.php?accion=info&id='. $pr['id'] .'" class="btn btn-primary">INFO</a> </td>';
    echo "</tr>";
}
echo '</tbody>';
echo "</table>";

/*echo '<button type="submit" name="accion" class="btn btn-primary btn-user btn-block">
<a href="controlador.php?accion=borrarid&id=1" class="btn btn-primary">BORRAR UNO</a>
</button>';*/

?>





<?php include("pie.php"); ?>
