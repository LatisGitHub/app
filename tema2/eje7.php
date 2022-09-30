<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eje7</title>
</head>

<body>
    <?php
    //Hacer una página PHP que para un array de 5 elementos muestre por pantalla 
    //la tabla de multiplicar de dichos elementos (del 1 al 10) (for o while)
    $array = array(1, 2, 3, 4, 5);

    for ($i = 0; $i < count($array); $i++) {
        for ( $j = 0; $j <= 10; $j++) {
            echo   $array[$i] . " x " . $j . "=" . ($j * $array[$i]);
            echo "<br>";
        }
        echo "<br>";
    }

    ?>
</body>

</html>