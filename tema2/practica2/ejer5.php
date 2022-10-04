<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejer5</title>
</head>

<body>
    <?php
    /*Mejora el programa anterior de tal manera que el mensaje original lo divida primero en un array
     de palabras considerando el espacio en blanco como separador únicamente. A continuación, debe poner 
     cada palabra del revés (hola ->aloh). Seguidamente encriptará cada palabra usando la función del ejercicio 
     anterior. Finalmente devolverá un string con cada palabra encriptada añadiendo un espacio en blanco entre 
     cada palabra. El desencriptador hará lo contrario (y no digo más). Muestra el programa funcionando encriptando
      y desencriptando.*/
    function encriptar($mensaje, $clave)
    {
        echo $mensaje;
        echo "<br>";
        $mensajeAlreves = strrev($mensaje);
        echo $mensajeAlreves;
        echo "<br>";
        $letras = str_split($mensajeAlreves, 1);




        foreach ($letras as $valor) {
            $nums = ord($valor);
            $nuev = chr($nums + $clave);
            echo $nuev . " ";
        }
        echo "<br>";
    }

    function desencriptar($mensaje, $clave)
    {
        echo $mensaje;
        echo "<br>";
        $mensajeAlreves = strrev($mensaje);
        echo $mensajeAlreves;
        echo "<br>";
        $letras = str_split($mensajeAlreves, 1);

        foreach ($letras as $valor) {
            $nums = ord($valor);
            $nuev = chr($nums - $clave);
            echo $nuev . " ";
        }
    }
    echo encriptar("hola", 1);
    echo "<br>";
    echo desencriptar("bmpi", 1);


    ?>

</body>

</html>