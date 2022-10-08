<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="./js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <title>ejer7</title>
</head>

<body>
    <div class="container">


        <?php
        /*
    Vamos a crear una librería online, pero con los libros almacenados en un array asociativo. Los datos 
    a guardar por cada libro son: ISBN, título, descripción, categoría, editorial, foto, precio. - La categoría puede ser: 
    ciencias, cocina, deporte, novela, historia, scifi, negra, romántica. - El campo foto será una url en tu pc en la misma 
    carpeta que esté el fichero php nos crearemos una carpeta imgs donde meteremos las imágenes de cada libro llamándolas 
    con el isbn.jpg. El tamaño de cada imagen será aproximadamente 100x150px. - ISBN será un número de trece dígitos que se 
    puede tratar como una cadena. - Precio será un float con dos decimales.
    A continuación, te muestro cómo debería quedar la visualización del array. 
    Tienes que intentar que sea lo más parecido posible. Como mínimo deberás tener 15 libros, y mostrar 4 libros en cada fila. 
    Los datos e imágenes de los libros deben ser lo más reales posible. Debes tener como mínimo 5 libros de novela histórica 
    y 5 de novela negra, pero sólo mostraremos los 4 primeros de cada una de esas categorías.*/
        function pintarPorCategoria($productos, $categoria)
        {
            echo "<h3>" . strtoupper($categoria) . "</h3>";
            $cont = 0;
            foreach ($productos as $valor) {

                if ($valor['categoria'] == $categoria) {

                    if ($cont == 4)
                        break;
                    $cont++;

                    echo "<div class='card mb-5' style='width: 16rem;'>
                        <img src='" . $valor["imagen"] . "' class='card-img-top' alt='...'>
                            <div class='card-body'>
                            <h5 class='card-title'>" . $valor["nombre"] . "</h5>
                            <p class='card-text'>" . $valor['descripcion'] . "</p>";

                    echo "
                            <p class='card-text'><small class='text-secondary'>" . $valor["precio"] . " €</small></p>

                            <a href='#' class='btn btn-primary'>Comprar</a>
                        </div>
                    </div>";
                }
            }
        }



        $carrito = array(
            array("ISBN" => 1234, "titulo" => "libro1", "descripcion" => "descripcion1", "categoría" => "terror", "editorial" => "A", "foto" => " ", "precio" => 38.20),
            array("ISBN" => 4567, "titulo" => "libro2", "descripcion" => "descripcion2", "categoría" => "ciencia", "editorial" => "B", "foto" => " ", "precio" => 45.50),
            array("ISBN" => 7891, "titulo" => "libro3", "descripcion" => "descripcion3", "categoría" => "terror", "editorial" => "C", "foto" => " ", "precio" => 50.20)
        );

        //Pintar productos
        echo "<table class='table table-striped table-hover'>";
        echo "<thead class='text-primary'>";
        echo "  <tr>";
        //Sacamos el nombre de cada columna con array_keys del primer array (producto)
        foreach (array_keys($carrito[0]) as $valor)
            echo "<td>" . strtoupper($valor) . "</td>";
        echo "  </tr>";
        echo "</thead>";
        echo "<tbody>";
        foreach ($carrito as $valor) {
            echo "<tr>";

            foreach ($valor as $campo) {
                echo "<td>";
                echo $campo;
                echo "</td>";
            }

            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";

        echo "<br><br>";



        echo "<div class='container'>";
        echo "<div class='row'>";


        foreach ($carrito as $valor) {


            echo "<div class='card' style='width: 16rem;'>
                  <img src='" . $valor["imagen"] . "' class='card-img-top' alt='...'>
                      <div class='card-body'>
                      <h5 class='card-title'>" . $valor["nombre"] . "</h5>
                      <p class='card-text'>" . $valor['descripcion'] . "</p>
                      <p class='card-text'><small class='text-secondary'>" . $valor["precio"] . " €</small></p>
                      <a href='#' class='btn btn-primary'>Comprar</a>
                  </div>
              </div>";
        }


        echo "</div>";
        echo "</div>";


        ?>

    </div>
</body>

</html>