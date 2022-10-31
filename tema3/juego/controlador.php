<?php session_start(); ?>
<?php include('lib.php'); ?>
<?php

if ($_GET['letra'] == 'entrar') {
    nuevaPalabra();
    $_SESSION['fallos'] = 0;
    $_SESSION['letras'] = array();
    echo '<script>window.location="' . "index.php" . '"</script>';
} else {
    $letraPulsada = $_GET['letra'];
    //array_push($_SESSION['letras'], $letraPulsada);
    repetidos($letraPulsada);

    for ($i = 0; $i < strlen($_SESSION['palabra']); $i++) {
        if ($_SESSION['palabra'][$i] == $letraPulsada) {
            $_SESSION['palabraActual'][$i] = $letraPulsada;
            echo '<script>window.location="' . "index.php" . '"</script>';
        }
    }

    if (!str_contains($_SESSION['palabra'],$letraPulsada)) {
        $_SESSION['fallos']++;
        echo '<script>window.location="' . "index.php" . '"</script>';
    }
}




?>