<?php
session_start();
?>
<?php
  header("Content-Type: text/html; charset=UTF-8");
?>
<?php

$error;

if (isset($_POST["email"]) && isset($_POST["password"])) {
    $_SESSION['email'] = $_POST["email"];
    $_SESSION['password'] = $_POST["password"];
    if ($_SESSION['email'] == "lati@gmail.com" && $_SESSION['password'] == "4321") {
        header("Location: proyectos.php");
    } else {
        $error = "dato incorrecto";
        header("Location: login.php");
    }
} else {
    $error = "campo vacio";
    header("Location: login.php");
}

?>