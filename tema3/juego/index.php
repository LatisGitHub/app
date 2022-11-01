<?php session_start(); ?>
<?php include('lib.php'); ?>
<style>
    img {
        margin-top: 1%;
    }

    a {
        color: white;
    }

    p {
        color: white;
    }
</style>

<!DOCTYPE html>

<?php


echo ' <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">';
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    ';

echo " <div class='container' >";
echo '<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AHORCADO</title>
</head>
<body style="background-color:black;">';

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
    }else{
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
//echo "<p class='h1 mt-5'>TU PALABRA <br><br> " . strtoupper($_SESSION['palabraActual']) . "</p><br>";
echo "</center>";



echo "</div>";


if ($_SESSION['palabra'] == $_SESSION['palabraActual']) {
    ganar();
}
if ($_SESSION['fallos'] == 7) {
    perder();
}
echo '</body> </html>';
//echo  $_SESSION['palabra'];
?>