<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejer3</title>
</head>

<body>
    <?php

    //Crear un array llamado $word_list_en con 50 palabras
    // en inglés. Crea otro array llamado $word_list_es con las mismas 50 palabras en el mismo orden, 
    //pero en español. El ejercicio consiste en hacer un traductor literal de español a inglés o viceversa, 
    //debe recorrer una cadena de texto y devolverla en el idioma traduciendo una por una las palabras (se supone 
    // que están en la misma posición en los arrays).



    function dicionario($word)
    {
        $word_list_en = array("phone", "computer", "screen", "mouse", "queen", "dragons", "red", "wind", "light");
        $world_list_es = array("movil", "ordenador", "pantalla", "raton", "reina", "dragones", "rojo", "viento", "luz");
        $encontrado=false;
        for ($i = 0; $i < count($word_list_en); $i++) {
            if ($word_list_en[$i] == $word) {
                return $world_list_es[$i];
                $encontrado = true;
            }
        }
        if ($encontrado == false) {
            return "such word doesnt exist";
        }
        
    }

    echo dicionario("queen");
    ?>
</body>

</html>