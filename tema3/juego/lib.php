<?php
function nuevaPalabra()
{
    $_SESSION['palabra'] =  diccionario();
    $palabraBlanco = "";
    for ($i = 0; $i < strlen($_SESSION['palabra']); $i++) {
        $palabraBlanco .= "_";
    }
    $_SESSION['palabraActual'] = $palabraBlanco;
}

function diccionario()
{
    $_SESSION['diccionario'] = [
        'hola', 'gato', 'perro', 'cabra', 'coche', 'manzana', 'ordenador', 'impresora', 'pelo', 'collar', 'carta',
        'chaqueta'
    ];
    $indice = rand(0, 11);
    $palabra = $_SESSION['diccionario'][$indice];
    return $palabra;
}

function ganar()
{
    echo '<script>window.location="' . "ganador.php" . '"</script>';
}

function perder()
{
    echo '<script>window.location="' . "perdedor.php" . '"</script>';
}

function repetidos($letraPulsada)
{
    $encontrado = false;
    foreach ($_SESSION['letras'] as $l) {
        if ($l == $letraPulsada) {
            $encontrado = true;
        }
    }

    if ($encontrado == false) {
        array_push($_SESSION['letras'], $letraPulsada);
    }
}

function pintarFallos($fallos)
{
    switch ($fallos) {
        case 0:
            echo '<img src="imagenes/0.gif">';
            break;
        case 1:
            echo '<img src="imagenes/1.gif">';
            break;
        case 2:
            echo '<img src="imagenes/2.gif">';
            break;
        case 3:
            echo '<img src="imagenes/3.gif">';
            break;
        case 4:
            echo '<img src="imagenes/4.gif">';
            break;
        case 5:
            echo '<img src="imagenes/5.gif">';
            break;
        case 6:
            echo '<img src="imagenes/final.gif">';
            break;
    }
}
