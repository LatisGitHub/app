<?php
class EnlaceBD
{
    public static function getEnlaces($id_regalo)
    {
        $conexion = ConexionBD::conectar();

        $coleccion = $conexion->enlaces;

        $cursor = $coleccion->find(["id_regalo"=>$id_regalo]);

        //Crear los objetos para devolverlos (MVC), Mongo me devuelve array asociativo
        $enlaces = array();
        foreach($cursor as $enlace) {
           $enlace_OBJ = new Enlace($enlace['id'],$enlace['nombre'],$enlace['url'],$enlace['precio'],$enlace['imagen'],$enlace['prioridad'],$enlace['id_regalo']);
           array_push($enlaces, $enlace_OBJ);
        }

        ConexionBD::cerrar();

        return $enlaces;
    }



    public static function borrarEnlace($id)
    {
        $conexion = ConexionBD::conectar();

        $deleteResult = $conexion->enlaces->deleteOne(['id' => intVal($id)]); 

        ConexionBD::cerrar();
    }

    //funciona pero NO LOS PINTA TRAS INSERTAR
    public static function insertarEnlace($nombre, $url, $precio, $imagen, $prioridad, $id_regalo)
    {
        $conexion = ConexionBD::conectar();

        //Hacer el autoincrement
        //Ordeno por id, y me quedo con el mayor
        $enlaceMayor = $conexion->enlaces->findOne(
            [],
            [
                'sort' => ['id_regalo' => -1],
            ]);
        if (isset($enlaceMayor))
            $idValue = $enlaceMayor['id_regalo'];
        else
            $idValue = 0;

        $enlace = new Enlace($idValue, $nombre, $url, $precio, $imagen, $prioridad, $id_regalo);
        //Collección 'usuarios'
        $insertOneResult = $conexion->enlaces->insertOne([
            'id' => intVal($idValue + 1),
            'nombre' => $enlace->getNombre(),
            'url' => $enlace->getUrl(),
            'precio' => $enlace->getPrecio(),
            'imagen' => $enlace->getImagen(),
            'prioridad' => $enlace->getPrioridad(),
            'id_regalo' => $enlace->getId_regalo(),
        ]);

        ConexionBD::cerrar();


        
    }
    public static function enlacesOrdenados($id_regalo)
    {
        $conexion = ConexionBD::conectar();

        $coleccion = $conexion->enlaces;

        $cursor = $coleccion->find(["id_regalo"=>$id_regalo],["sort"=>["precio"=>1]]);

        $enlaces = array();
        foreach($cursor as $enlace) {
           $enlace_OBJ = new Enlace($enlace['id'],$enlace['nombre'],$enlace['url'],$enlace['precio'],$enlace['imagen'],$enlace['prioridad'],$enlace['id_regalo']);
           array_push($enlaces, $enlace_OBJ);
        }

        ConexionBD::cerrar();

        return $enlaces;
    }
}
