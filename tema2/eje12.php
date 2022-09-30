<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eje12</title>
</head>

<body>
    <?php
    //Haz un diccionario de palabras español a inglés (20 palabras mínimo) con un array asociativo. 
    //Haz un programa que dada una palabra compruebe si está en el diccionario y si es así que muestre 
    //la traducción, y si no está que indique que no está en el diccionario. A continuación, muestra el diccionario
    // ordenador en español
    $diccionario = array("raton" => "mouse", "movil" => "phone", "padreando" => "fathering", "padre" => " f. alonso" , "ingles" => "english",
                   "silla" => "chair", "coche" => "car");


    $palabra = "coche";
    if (array_key_exists($palabra, $diccionario)){
        echo "Traduccion: " . $diccionario[$palabra];
    }else{
        echo "La palabra no está";
    }
    ?>
</body>

</html>