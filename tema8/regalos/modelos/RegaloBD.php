<?php
class RegaloBD
{

    public static function getRegalos($id)
    {
        $conexion = ConexionBD::conectar();

            $coleccion = $conexion->regalos;

            $cursor = $coleccion->find(["id_usuario"=>$id]);

            //Crear los objetos para devolverlos (MVC), Mongo me devuelve array asociativo
            $regalos = array();
            foreach($cursor as $regalo) {
               $regalo_OBJ = new Regalo($regalo['id'],$regalo['nombre'],$regalo['destinatario'],$regalo['precio'],$regalo['estado'],$regalo['anio'],$regalo['id_usuario']);
               array_push($regalos, $regalo_OBJ);
            }

            ConexionBD::cerrar();

            return $regalos;
    }


    //falta terminar
    public static function modificarRegalo($nombre, $destinatario, $precio, $estado, $anio, $id) {
        $conexion = ConexionBD::conectar();
        $coleccion = $conexion->regalos;
        $id_usuario = unserialize($_SESSION['usuario'])->getId();

        $regalo = new Regalo($id, $nombre, $destinatario, $precio, $estado, $anio, $id_usuario);
        $updateResult = $conexion->regalos->updateOne(
          ["id" => (intVal($regalo->getId()))],
          ['$set' => ["nombre" => $regalo->getNombre(), "destinatario" => $regalo->getDestinatario(), "precio" => $regalo->getPrecio(), 
          "estado" => $regalo->getEstado(), "anio" => $regalo->getAnio()]]  
        );

        ConexionBD::cerrar();

    }

    //funciona PERO no pinta los nuevos regalos
    public static function insertarRegalo($nombre, $destinatario, $precio, $estado, $anio, $id_usuario)
    {
        $conexion = ConexionBD::conectar();

            //Hacer el autoincrement
            //Ordeno por id, y me quedo con el mayor
            $regaloMayor = $conexion->regalos->findOne(
                [],
                [
                    'sort' => ['id' => -1],
                ]);
            if (isset($regaloMayor))
                $idValue = $regaloMayor['id'];
            else
                $idValue = 0;

            $regalo = new Regalo($idValue, $nombre, $destinatario, $precio, $estado, $anio, $id_usuario);
            //Collección 'usuarios'
            $insertOneResult = $conexion->regalos->insertOne([
                'id' => intVal($idValue + 1),
                'nombre' => $regalo->getNombre(),
                'destinatario' => $regalo->getDestinatario(),
                'precio' => $regalo->getPrecio(),
                'estado' => $regalo->getEstado(),
                'anio' => $regalo->getAnio(),
                'id_usuario' => $regalo->getId_usuario(),
            ]);

            ConexionBD::cerrar();
    }

    public static function borrarRegalo($id) {
        $conexion = ConexionBD::conectar();

        $deleteResult = $conexion->regalos->deleteOne(['id' => intVal($id)]); 

        ConexionBD::cerrar();

    }

    public static function busquedaYear($year, $id_usuario) {
        $conexion = ConexionBD::conectar();

        $coleccion = $conexion->regalos;

        $cursor = $coleccion->find(["id_usuario"=>$id_usuario]);
        $cursor = $coleccion->find(["anio" => $year]);

        

        //Crear los objetos para devolverlos (MVC), Mongo me devuelve array asociativo
        $regalos = array();
        foreach($cursor as $regalo) {
           $regalo_OBJ = new Regalo($regalo['id'],$regalo['nombre'],$regalo['destinatario'],$regalo['precio'],$regalo['estado'],$regalo['anio'],$regalo['id_usuario']);
           array_push($regalos, $regalo_OBJ);
        }

        ConexionBD::cerrar();

        return $regalos;
    }

   
}
