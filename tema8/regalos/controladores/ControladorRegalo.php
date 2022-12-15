<?php
class controladorRegalo
{


    public static function mostrarRegalos($id_usuario)
    {
        $regalos = RegaloBD::getRegalos($id_usuario);
        VistaRegalos::render($regalos);
    }

    public static function mostrarRegalosAjax($id_usuario)
    {
        $regalos = RegaloBD::getRegalos($id_usuario);
        VistaRegalos::renderAjax($regalos);
    }

    public static function borrarRegalo($id)
    {
        RegaloBD::borrarRegalo($id);
        echo '<script>window.location="' . "enrutador.php?accion=mostrar" . '"</script>';
    }
    public static function busquedaYear($year, $id_usuario)
    {
        $regalos = RegaloBD::busquedaYear($year, $id_usuario);
        VistaRegalos::render($regalos);

    }

    public static function modificarRegalo($nombre, $destinatario, $precio, $estado, $anio, $id)
    {
        RegaloBD::modificarRegalo($nombre, $destinatario, $precio, $estado, $anio, $id);
        echo '<script>window.location="' . "enrutador.php?accion=mostrar" . '"</script>';
    }

    public static function insertarRegalo($nombre, $destinatario, $precio, $estado, $anio, $id_usuario)
    {
        RegaloBD::insertarRegalo($nombre, $destinatario, $precio, $estado, $anio, $id_usuario);
        echo '<script>window.location="' . "enrutador.php?accion=mostrar" . '"</script>';

    }
    
    
}
