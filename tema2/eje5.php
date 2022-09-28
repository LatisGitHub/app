<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 5</title>
</head>

<body>
    <?php
    //5. Tenemos una variable $numero que tiene un número de 0 a 99. Mostrarlo escrito. Por ejemplo, para 56 mostrar: cincuenta y seis.

    $numero = 87;
    $decena = $numero / 10;
    $unidad = ($numero % 10) / 1;

    if ($unidad == 1)
        $uni = "uno";
    else if ($unidad == 2)
        $uni = "dos";
    else if ($unidad == 3)
        $uni = "tres";
    else if ($unidad == 4)
        $uni = "cuatro";
    else if ($unidad == 5)
        $uni = "cinco";
    else if ($unidad == 6)
        $uni = "seis";
    else if ($unidad == 7)
        $uni = "siete";
    else if ($unidad == 8)
        $uni = "ocho";
    else if ($unidad == 9)
        $uni = "nueve";
    
    

    if ($decena == 1 && $unidad == 0)
        $sobreD = "diez";
    else if ($decena == 1 && $unidad == 1)
        $sobreD = "once";
    else if ($decena == 1 && $unidad == 2)
        $sobreD = "doce";
    else if ($decena == 1 && $unidad == 3)
        $sobreD = "trece";
    else if ($decena == 1 && $unidad == 4)
        $sobreD = "catorce";
    else if ($decena == 1 && $unidad == 5)
        $sobreD = "quince";
    else if ($decena == 1 && $unidad == 6)
        $sobreD = "dieciseis";
    else if ($decena == 1 && $unidad == 7)
        $sobreD = "diecisiete";
    else if ($decena == 1 && $unidad == 8)
        $sobreD = "dieciocho";
    else if ($decena == 1 && $unidad == 9)
        $sobreD = "diecinueve";
    

    if ($decena == 2)
        $dec = "veinte";
    else if ($decena == 3)
        $dec = "treinta";
    else if ($decena == 4)
        $dec = "cuarenta";
    else if ($decena == 5)
        $dec = "cincuenta";
    else if ($decena == 6)
        $dec = "sesenta";
    else if ($decena == 7)
        $dec = "setenta";
    else if ($decena == 8)
        $dec = "ochenta";
    else if ($decena == 9)
        $dec = "noventa";

    if ($numero < 10) 
        echo "El numero es: $unidad";
    else if ($numero < 20)
        echo "El numero es: $sobreD";
    else if ($numero < 100) {
        if ($numero % 10 == 0) {
            echo "El numero es: $dec";
        } else {
            echo "El numero es: $dec $uni";
        }
    }

    ?>
</body>

</html>