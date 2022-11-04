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
if ($_SESSION['palabra'] == $_SESSION['palabraActual']) {
    pintarGanador();
} else if ($_SESSION['fallos'] < 7) {
    juegoprincipal();
} else if ($_SESSION['fallos'] == 7) {
    pintarPerdedor();
}

echo '</body> </html>';
?>