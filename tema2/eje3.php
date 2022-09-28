<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 3</title>
</head>
<body>
    <?php
    //3. Tenemos el radio de un circulo almacenado en la variable $radio obtenida de forma aleatoria, calcular y 
    //mostrar por pantalla el volumen de una esfera de ese radio.
    $radio = rand(2,10);
    $volumen = 4/3 * pi() * pow($radio, 3);
    echo "$volumen";
    ?>
</body>
</html>