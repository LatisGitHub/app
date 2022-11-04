<?php
$dbh = null;
try {
    $dsn = "mysql:host=mariaDB;dbname=ejemplo";
    $dbh = new PDO($dsn, "usuario", "usuario");
} catch (PDOException $e){
    echo $e->getMessage();
}

/*
//insert
// Prepare
$stmt = $dbh->prepare("INSERT INTO clientes (nombre, apellidos, direccion, localidad, movil) VALUES (?, ?, ?, ?, ?)");
// Bind
$stmt->bindValue(1, "javi");
$stmt->bindValue(2, "guillen");
$stmt->bindValue(3, "mi casa");
$stmt->bindValue(4, "mojacar");
$stmt->bindValue(5, "652589785");
// Excecute
$stmt->execute();

*/


// metodo preparado sobre conexion
$stmt = $dbh->prepare("SELECT * FROM clientes");
$stmt->execute();
$clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($clientes as $cliente){
    echo $cliente["nombre"] . "<br>";
}

?>