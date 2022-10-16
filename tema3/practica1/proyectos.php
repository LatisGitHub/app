<?php  include("cabecera.php"); ?>
<?php  


$proyectos = array(
    array("id" => 1, "nombre" => "proyecto 1", "fechaInicio" => "01/01/2022", "fechaFinPrevista" => "02/02/2022",
            "diasTranscurridos" => "5", "porcentajeCompletado" => "5%", "importancia" => 2),
    array("id" => 1, "nombre" => "proyecto 1", "fechaInicio" => "01/01/2022", "fechaFinPrevista" => "02/02/2022",
            "diasTranscurridos" => "5", "porcentajeCompletado" => "5%", "importancia" => 2),
    array("id" => 1, "nombre" => "proyecto 1", "fechaInicio" => "01/01/2022", "fechaFinPrevista" => "02/02/2022",
            "diasTranscurridos" => "5", "porcentajeCompletado" => "5%", "importancia" => 2)
        
);

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
    echo "<tbody>";



    foreach($proyectos as $pr) {
        echo "<tr>";
        echo "<td>" . $pr["nombre"] . "</td>";
        echo "<td>" . $pr["fechaInicio"] . "</td>";
        echo "<td>" . $pr["fechaFinPrevista"] . "</td>";
        echo "<td>" . $pr["diasTranscurridos"] . "</td>";
        echo "<td>" . $pr["porcentajeCompletado"] . "</td>";
        echo "<td>" . $pr["importancia"] . "</td>";
        echo "</tr>";
    }
    echo '</tbody>';
    echo "</table>";

?>








<?php  include("pie.php"); ?>
