<?php
session_start();
?>
<?php
header("Content-Type: text/html; charset=UTF-8");
?>
<?php
include "lib.php";
?>
<?php

$error;
if (isset($_POST['accion'])) {
    if ($_POST["accion"] == "login") {

        if (isset($_POST["email"]) && isset($_POST["password"])) {
            $_SESSION['email'] = $_POST["email"];
            $_SESSION['password'] = $_POST["password"];    
            $mayus = true;

            if (($_SESSION['password']) == strtolower($_SESSION['password'])) {
                $mayus = false;
            }

            if (strlen($_SESSION['password']) >= 8 && $mayus == true) {
                echo '<script>window.location="' . "proyectos.php" . '"</script>';
            } else if (strlen($_SESSION['password']) < 8) {
                $error = 'Introduce una contraseña de mayor longitud (mínimo 8)';
                echo '<script>window.location="' . "login.php?error=$error" . '"</script>';
            } else if ($mayus == false) {
                $error = 'Introduce al menos una mayúscula';
                echo '<script>window.location="' . "login.php?error=$error" . '"</script>';
            } else {
                $error = "dato incorrecto";
                echo '<script>window.location="' . "login.php" . '"</script>';
            }
        } else {
            $error = "campo vacio";
            echo '<script>window.location="' . "login.php?error=$error" . '"</script>';
        }
    }
}

?>



<?php
if (isset($_POST['accion'])) {
    if ($_POST["accion"] == "formulario") {
        if ($_POST) {

            if (isset($_POST['nuevoProyecto'])) {
                $nombre = filtrado($_POST['nombre']);
                $fechaInicio = filtrado($_POST['fechaInicio']);
                $fechaFinPrevisto = filtrado($_POST['fechaFinPrevista']);
                $diasTranscurridos = filtrado($_POST['diasTranscurridos']);
                $porcentajeCompletado = filtrado($_POST['porcentajeCompletado']);
                $importancia = filtrado($_POST['importancia']);

                if (isset($_SESSION['proyectos'])) {
                    $id = 0;
                } else {
                    //Calculamos el id mayor
                    $ids = array_column($_SESSION['proyectos'], 'id');
                    $id = max($ids) + 1;
                }
                array_push($_SESSION['proyectos'], [
                    'id' => $id, 'nombre' => $nombre, 'diasTranscurridos' => $diasTranscurridos,
                    'fechaInicio' => $fechaInicio, 'fechaFinPrevista' => $fechaFinPrevisto, 'porcentajeCompletado' => $porcentajeCompletado, 'importancia' => $importancia
                ]);

                echo '<script>window.location="' . "proyectos.php" . '"</script>';
            }
        }
    }
}
?>

<?php
if (isset($_GET["accion"])) {
    if ($_GET['accion'] == "borrartodo") {
        //$_SESSION = array();
        //echo '<script>window.location="' . "proyectos.php" . '"</script>';
        //$limpio = array();
        //$_SESSION['proyectos'] = array();
        foreach ($_SESSION['proyectos'] as $i => $value) {
            unset($_SESSION['proyectos'][$i]);
        }
        echo '<script>window.location="' . "proyectos.php" . '"</script>';
    }
}
?>

<?php

if ($_GET['accion'] == "borrarid") {

    //unset([$_SESSION['proyectos'][0]]);
    /* foreach ($_SESSION['proyectos'] as $key => $value) {
        if ($_GET['accion'] == "borrarid" && $_GET['id'] == $key) {
            unset($_SESSION['proyectos'][$key]);
        }
    }
    echo '<script>window.location="' . "proyectos.php" . '"</script>';*/


    $proyectoNuevo = array();
    foreach ($_SESSION['proyectos'] as $pr) {
        if ($pr['id'] != $_GET['id']) {
            array_push($proyectoNuevo, $pr);
        }
    }
    $_SESSION['proyectos'] = $proyectoNuevo;
    echo '<script>window.location="' . "proyectos.php" . '"</script>';

}

?>

<?php
if ($_GET['accion'] == "info") {
    foreach ($_SESSION['proyectos'] as $key => $value) {
        if ($_GET['id'] == $key) {
            $_SESSION['ids'] = $_SESSION['proyectos'][$key];
            echo '<script>window.location="' . "verproyecto.php" . '"</script>';
        }
    }
}

?>