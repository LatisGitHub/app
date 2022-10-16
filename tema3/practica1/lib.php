<?php

    //Calcular el total del carro de la compra
    function total($carro) {
        $total = 0;
        foreach($carro as $linea) {
            $total += $linea['cant'] * $linea['precio'];
        }

        return $total;
    }

    //Función para limpiar los input de los formularios
    function filtrado($datos){
        $datos = trim($datos); // Elimina espacios antes y después de los datos
        $datos = stripslashes($datos); // Elimina backslashes \
        $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
        return $datos;
    }

?>