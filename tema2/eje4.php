<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 4</title>
</head>

<body>
    <?php
    //4. Tenemos los coeficientes de una ecuación de 2º grado (ax2 + bx + c = 0) en tres variables $a, $b y $c, muestra 
    $a = 2;
    $b= 2;
    $c = -1;

    $resultado1 =  (-$b +sqrt(($b*$b)-(4*$a*$c)))/(2*$a);
    $resultado2 = (-$b -sqrt(($b*$b)-(4*$a*$c)))/(2*$a);
    echo $resultado1;
    echo "<br>";
    echo $resultado2;

    ?>
</body>

</html>