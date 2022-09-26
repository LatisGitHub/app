<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>

<body>
    <?php
    //Partiendo de 2 variables $primera y $segunda con valores aleatorios, hacer una página PHP que calcule y muestre por 
    //pantalla: 
    // - la diferencia de $primera menos $segunda 
    // - la división de $primera entre $segunda 
    //  Añade un comentario que 
    //explique la función de generar números aleatorios.
    $primera = rand(1,10);
    $segunda = rand(1,10);
    $diferencia= $primera - $segunda;
    $division = $primera / $segunda;
    echo "La diferencia entre $primera y $segunda es de: $diferencia" . "<br>";
    echo "La division entre $primera y $segunda es de: $division";



    ?>
</body>

</html>