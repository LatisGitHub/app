<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <div class="col-md-8 themed-grid-col">
        <div class="flex-shrink-0 p-3 bg-white">


            <title>ejer6</title>
</head>

<body>
    <?php
    /*6. Vamos a crear un programa que calcule el IVA de un carrito de la compra. El carrito será un array
     bidimensional asociativo de este tipo: (Puedes añadir más productos y más campos a tu elección) 
     $carrito = array( 
     array(“id” => 1234, “nombre” => “PS4”, “precio” => 349.95, “cant” => 2, “iva_r” => 0), array(“id” => 1235, “nombre” => 
     “iPhone XS”, “precio” => 1249.95, “cant” => 1, “iva_r” => 0), array(“id” => 1236, “nombre” => “Chocolate”, “precio” => 9.95, 
     “cant” => 5, “iva_r” => 1) ) ;


     Deberéis crear una función llamada subtotal($linea_pedido) que calcule el precio de cada línea de
      pedido, multiplicando el precio por la cantidad y aplicando el iva correspondiente, 
      si iva_r es 0 será del 21% y si iva_r es 1 será del 10%. 
      Mostrar en una tabla HTML el carrito de la compra (nombre, precio, cantidad y subtotal). En la última fila 
      aparecerá el total del pedido a pagar. Se tendrá en cuenta la visualización y el estilo del carrito de la compra resultante.*/

    $carrito = array(
        array("id" => 1234, "nombre" => "PS4", "precio" => 349.95, "cant" => 2, "iva_r" => 0),
        array("id" => 1235, "nombre" => "iPhone xs", "precio" => 1249.95, "cant" => 1, "iva_r" => 0),
        array("id" => 1236, "nombre" => "Chocolate", "precio" => 9.95, "cant" => 5, "iva_r" => 1)
    );


    function subtotal($lineaPedio)
    {
        if ($lineaPedio["iva_r"] == 0) {
            $totalidad = $lineaPedio["precio"] * $lineaPedio["cant"] * 1.21;
        } else {
            $totalidad = $lineaPedio["precio"] * $lineaPedio["cant"] * $lineaPedio["iva_r"] * 1.10;
        }

        return $totalidad;
    }

    echo "<table class='table'>";
    echo "<tbody>";
    $contador = 0;
        echo "<tr>";
        echo "<th>Nombre</th>";
        echo "<th>Cantidad</th>";
        echo "<th>IVA</th>";
        echo "<th>TOTAL</th>";  
        echo "</tr>";

       
    foreach ($carrito as $linea) {
        echo "<tr>";
        echo "<td>" . $linea['nombre'] . "</td>";
        echo "<td>" . $linea['cant'] . "</td>";

        echo "<td>";
        if ($linea['iva_r'] == 0)
            echo "21%";
        else
            echo "10%";
        echo "</td>";

        echo "<td>" . subtotal($linea) . " €</td>";


        echo "</tr>";
    }
    ?>
    </div>
    </div>
    </div>

</body>

</html>