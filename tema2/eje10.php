<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eje10</title>
</head>

<body>
    <?php
    //Rellena un array de 10 números enteros, con los 10 primeros números naturales. 
    //Calcula la media de los que están en posiciones pares y muestra los impares por pantalla.
    $sumaImpar = 0;
    $sumaPar = 0;
    $contador = 0;
    for ($i = 1; $i <10; $i++) {
        $array[$i] = $i;
            if ($array[$i] % 2 == 0) {
                $sumaPar = $sumaPar + $array[$i];
                $contador+=1;
            } else {
                echo $array[$i] . ", ";
            }
            
    }
    echo "<br>";
    echo ($sumaPar/$contador) . " media de los pares" . "<br>";
    ?>
</body>

</html>