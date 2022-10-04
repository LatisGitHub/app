<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio1</title>
</head>

<body>
    <?php
    //Crea un array de nombres de clientes, que contengan nombre de la 
    //empresa de al menos 5 clientes. [“Cosentino”, “Garciden”, “Deretil”, “Makito”, “Globomatik”]
    // A continuación, crea una función llamada: convierteClientes($nombres, $opcion) donde el primer parámetro 
    //sea el array con los nombres de los clientes, y el segundo parámetro pueden ser tres opciones:
    // - “L”: transforma todos los strings del array $nombres a minúsculas y lo devuelve. 
    //- “U”: transforma todos los strings del array $nombres a mayúsculas y lo devuelve. 
    //- “M”: transforma todos los strings del array $nombres de modo que la primera letra de cada nombre de empresa sea mayúscula 
    //y el resto minúscula. Lo devuelve. Muestra un ejemplo de la función con cada una de las diferentes opciones.
    $empresas = ['consentino', 'Garciden', 'Deretil', 'Makito', 'Globomatik'];
    
    
    
    function transformaClientes($nombre, $opcion)
    {
       
        switch ($opcion) {
            case 'L':
                return strtolower($nombre);
            case 'U':
                return strtoupper($nombre);
            case 'M':
                return ucfirst($nombre);
            default:
        }
    }


    echo transformaClientes($empresas[0], 'M');
    echo "<br>";
    echo transformaClientes($empresas[1], 'L');
    echo "<br>";
    echo transformaClientes($empresas[2], 'U');


    ?>

</body>

</html>