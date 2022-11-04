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

function pintarGanador()
{
    echo '<script>
    let sonido = new Audio("imagenes/dogsong.mp3");
    sonido.play();
    sonido.volume = 0.3;
    </script>';
    echo '<img src="imagenes/doge.gif" alt="" style="margin-left:85%;margin-top:-0%;">
    <center> <img src="imagenes/ganar.gif" style="margin-bottom:-1%;></center>
    <div class="container">
        <center>
            <a href="juego.php" class="btn btn-danger ml-5">JUGAR DE NUEVO</a>
        </center>
    </div>
    <center>
        <img src="imagenes/hasganado.gif" alt="" width="35%" style="margin-top:2% ">

    </center>';
}

function pintarPerdedor()
{
    echo '<script>
    let sonido = new Audio("imagenes/fin.mp3");
    sonido.play();
    sonido.volume = 0.3;
    </script>';
    echo '<img src="imagenes/doge.gif" alt="" style="margin-left:85%;margin-top:-0%;">
    <center> <img src="imagenes/perder3.gif"></center>

    <div class="container">
        <center>
            <a href="juego.php" class="btn btn-danger" style="margin-top:-3.7%;">JUGAR DE NUEVO</a>
        </center>
    </div>
    <center>
        <img src="imagenes/fin.gif" alt="" width="35%" style="margin-top:13% ;">

    </center>';
}

function juegoprincipal()
{
    echo "<br>";
    echo "<center>";

    echo "<p class='h3 mb-2'> LETRAS DICHAS <br>";
    foreach ($_SESSION['letras'] as $letra) {
        echo strtoupper($letra) . " - ";
    }
    echo "</p><br>";

    $abecedario = [
        "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o",
        "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"
    ];

    $contador = 0;
    echo "<div class='row'>";
    echo "<div class='col-12'>";
    foreach ($abecedario as $abec) {
        if (in_array($abec, $_SESSION['letras'])) {
            echo "<a href='controlador.php?letra=" . $abec . "' class='btn btn-danger m-1'>" . strtoupper($abec) . "</a>";
        } else {
            echo "<a href='controlador.php?letra=" . $abec . "' class='btn btn-primary m-1'>" . strtoupper($abec) . "</a>";
        }

        $letrita = $abec;
        $contador++;
        if ($contador % 14 == 0) {
            echo "<br>";
        }
    }
    echo "</div>";
    echo "</div>";

    pintarFallos($_SESSION['fallos']);
    echo "<br>";
    for ($i = 0; $i < strlen($_SESSION['palabraActual']); $i++) {
        echo "<a class='h1 m-1' style=none >" . strtoupper($_SESSION['palabraActual'][$i]) . "  " . "</a>";
    }
    ///echo "<p class='h1 mt-5'>TU PALABRA <br><br> " . strtoupper($_SESSION['palabraActual']) . "</p><br>";
    echo "</center>";



    echo "</div>";
}
