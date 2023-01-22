<?php

class ArticuloBD
{

    public static function getArticulos()
    {
        $conexion = ConexionBD::conectar();

            $coleccion = $conexion->articulos;

            $cursor = $coleccion->find();

            //Crear los objetos para devolverlos (MVC), Mongo me devuelve array asociativo
            $articulos = array();
            foreach($cursor as $articulo) {
               $articulo_OBJ = new Articulo($articulo['id'],$articulo['titulo'],$articulo['texto'],$articulo['imagen'],$articulo['fecha']);
               array_push($articulos, $articulo_OBJ);
            }

            ConexionBD::cerrar();

            return $articulos;
    }

    public static function insertarArticulo($articuloObjeto)
    {
        $conexion = ConexionBD::conectar();

        //Hacer el autoincrement
        //Ordeno por id, y me quedo con el mayor
        $articuloMayor = $conexion->articulos->findOne(
            [],
            [
                'sort' => ['id' => -1],
            ]
        );
        if (isset($articuloMayor))
            $idValue = $articuloMayor['id'];
        else
            $idValue = 0;

        //Collección 'usuarios'
        $insertOneResult = $conexion->articulos->insertOne([
            'id' => intVal($idValue + 1),
            'titulo' => $articuloObjeto->getTitulo(),
            'texto' => $articuloObjeto->getTexto(),
            'imagen' => $articuloObjeto->getImagen(),
            'fecha' => $articuloObjeto->getFecha()
        ]);

        ConexionBD::cerrar();
    }
}
