<?php
function conexionBD()
{
  $dbh = null;

  try {
    //mariadb --> nombre del contenedor donde tengamos mysql
    $dsn = "mysql:host=mariaDB;dbname=biblioteca";
    $dbh = new PDO($dsn, "root", "toor");
  } catch (PDOException $e) {
    echo $e->getMessage();
  }

  return $dbh;
}


function selectPrestamos()
{
  $conexion = conexionBD();
  $prestamos = null;
  try {
    $stmt = $conexion->prepare("SELECT * FROM prestamos");
    $stmt->execute();
    $prestamos = $stmt->fetchAll(PDO::FETCH_ASSOC);
  } catch (PDOException $ex) {
    echo $ex->getMessage();
  }
  $conexion = null; //Cerrar la conexión

  return $prestamos;
}

function nombreUsuario($idUsuario)
{
  $conexion = conexionBD();
  try {
    $stmt = $conexion->prepare("SELECT nombre FROM usuarios WHERE id = ?");
    $stmt->bindValue(1, $idUsuario);
    $stmt->execute();
    $nombre = $stmt->fetchAll(PDO::FETCH_ASSOC);
  } catch (PDOException $ex) {
    echo $ex->getMessage();
  }
  $conexion = null; //Cerrar la conexión

  return $nombre;
}




function tituloLibro($idLibro)
{
  $conexion = conexionBD();
  $libroNombre = null;
  try {
    $stmt = $conexion->prepare("SELECT titulo FROM libros WHERE id = ?");
    $stmt->bindValue(1, $idLibro);
    $stmt->execute();
    $libroNombre = $stmt->fetchAll(PDO::FETCH_ASSOC);
  } catch (PDOException $ex) {
    echo $ex->getMessage();
  }
  $conexion = null; //Cerrar la conexión

  return $libroNombre;
}

function borrarPrestamo($idPrestamo) {
  $conexion = conexionBD();
  try {
      $stmt = $conexion->prepare("DELETE FROM prestamo WHERE id = ?");
      $stmt->bindValue(1, $idPrestamo);
      $stmt->execute();
  } catch (PDOException $ex) {
      echo $ex->getMessage();
  }
  $conexion = null; //Cerrar la conexión
}

function insertarPrestamo($isbn, $dni, $finicio, $ffin) {

        
  $conexion = conexionBD();

  try {
      $stmt1 = $conexion->prepare("SELECT idUsuario from prestamo where isbn = ?"); 

      $stmt = $conexion->prepare("INSERT INTO prestamos (id, descripcion, genero, plataforma) 
      FROM 
      VALUES (?, ?, ?, ?)" );
      $fechaCreacion = date('Y-m-d H:i:s');

      $stmt->bindValue(1, $nombre);
      $stmt->bindValue(2, $descripcion);
      $stmt->bindValue(3, $genero);
      $stmt->bindValue(4, $plataforma);
      $stmt->execute();
  } catch (PDOException $ex) {
      echo $ex->getMessage();
  }
}