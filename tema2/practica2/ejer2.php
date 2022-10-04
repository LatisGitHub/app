<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio2</title>
</head>

<body>
    <?php
    //Crea una cadena llamada $direccionIp y asígnale una dirección 
    //ip como 192.168.11.200. A continuación, separa en un array con cada dígito de la dirección ip, 
    //y muestra cada dígito por separado (usa una función php). Seguidamente reconstruye en una cadena 
    //la dirección ip, pero que en lugar de separar por puntos los dígitos aparezcan separados por dos puntos (:) y muéstralo
    $direccionIp = '192.168.11.200';
    $ips = explode(".", $direccionIp);
    echo $ips[0];
    echo "<br>";
    echo $ips[1];
    echo "<br>";
    echo $ips[2];

    $nuevaips = implode(":", $ips);
    echo "<br>" . "con :" . "<br>";
    echo $nuevaips;

    ?>
</body>

</html>