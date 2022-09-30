<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eje14</title>
</head>

<body>
    <?php
    //Crea un array de notas de alumnos. Cada elemento del array debe contener las notas de un alumno, 
    //incluyendo nombre, materia y nota. Haz un programa con 10 notas de alumnos. Luego debes mostrar las 
    //notas ordenadas en orden descendente por alumno, luego ordenadas por nombre, luego mostrar la nota media 
    //del curso, y el número de alumnos suspensos.
    $notas = array(
        array("nombre" => "Rubén", "materia" => "Servidor", "nota" => 7),
        array("nombre" => "Rubén", "materia" => "Cliente", "nota" => 8),
        array("nombre" => "Emi", "materia" => "Servidor", "nota" => 3),
        array("nombre" => "Emi", "materia" => "Cliente", "nota" => 7),
        array("nombre" => "Carlos", "materia" => "Servidor", "nota" => 8),
        array("nombre" => "Carlos", "materia" => "Cliente", "nota" => 8),
        array("nombre" => "Diego", "materia" => "Servidor", "nota" => 6),
        array("nombre" => "Diego", "materia" => "Cliente", "nota" => 4),
        array("nombre" => "Pilar", "materia" => "Servidor", "nota" => 7),
        array("nombre" => "Pilar", "materia" => "Cliente", "nota" => 9),
        array("nombre" => "Guillermo", "materia" => "Servidor", "nota" => 7)
    );


    array_multisort(array_column($notas, "nombre"), SORT_DESC, array_column($notas, "nota"), $notas);

    foreach ($notas as $valor) {
        echo $valor["nombre"] . " - " . $valor["materia"] . " - " . $valor["nota"] . "<br>";
    }

    echo array_sum(array_column($notas, "nota")) / count($notas);

    function suspenso($nota)
    {
        return $nota < 5;
    }
    echo "<br>";
    echo count(array_filter(array_column($notas, "nota"), "suspenso"));
    ?>


    ?>
</body>

</html>