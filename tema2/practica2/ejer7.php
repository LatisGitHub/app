<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="./js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <title>ejer7</title>
</head>

<body>
    <div class="container">

        <h1>Bienvenido a tu tienda de libros</h1>

        <?php
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
                        <img src='" . $valor["imagen"] . "' class='card-img-top' alt='...' width=50% height=50%>
                            <div class='card-body'>
                            <h5 class='card-title'>" . $valor["titulo"] . "</h5>
                            <p class='card-text'>" . $valor['ISBN'] . "</p>
                            <p class='card-text'>" . $valor['descripcion'] . "</p>";
                    echo "
                            <p class='card-text'><small class='text-secondary'>" . $valor["precio"] . " €</small></p>

                            <a href='#' class='btn btn-primary'>Comprar</a>
                        </div>
                    </div>";
                }
            }
        }


        //Productos de una tienda
        $productos = array(
            array("ISBN" => 1234, "titulo" => "libro1", "descripcion" => "descripcion1", "categoria" => "terror", "editorial" => "A", "imagen" => "img/libro2.jpg", "precio" => 38.20),
            array("ISBN" => 4567, "titulo" => "libro2", "descripcion" => "descripcion2", "categoria" => "ciencia", "editorial" => "B", "imagen" => "img/libro2.jpg", "precio" => 45.50),
            array("ISBN" => 7891, "titulo" => "libro3", "descripcion" => "descripcion3", "categoria" => "terror", "editorial" => "C", "imagen" => "img/libro3.jpg ", "precio" => 50.20),
            array("ISBN" => 4567, "titulo" => "libro2", "descripcion" => "descripcion2", "categoria" => "ciencia", "editorial" => "B", "imagen" => "img/libro2.jpg", "precio" => 45.50),
            array("ISBN" => 4567, "titulo" => "libro2", "descripcion" => "descripcion2", "categoria" => "ciencia", "editorial" => "B", "imagen" => "img/libro2.jpg", "precio" => 45.50),
            array("ISBN" => 1234, "titulo" => "libro1", "descripcion" => "descripcion1", "categoria" => "terror", "editorial" => "A", "imagen" => "img/libro2.jpg", "precio" => 38.20),
            array("ISBN" => 4567, "titulo" => "libro2", "descripcion" => "descripcion2", "categoria" => "ciencia", "editorial" => "B", "imagen" => "img/libro2.jpg", "precio" => 45.50),
            array("ISBN" => 7891, "titulo" => "libro3", "descripcion" => "descripcion3", "categoria" => "terror", "editorial" => "C", "imagen" => "img/libro3.jpg ", "precio" => 50.20),
            array("ISBN" => 4567, "titulo" => "libro2", "descripcion" => "descripcion2", "categoria" => "ciencia", "editorial" => "B", "imagen" => "img/libro2.jpg", "precio" => 45.50),
            array("ISBN" => 1234, "titulo" => "libro1", "descripcion" => "descripcion1", "categoria" => "terror", "editorial" => "A", "imagen" => "img/libro2.jpg", "precio" => 38.20),
            array("ISBN" => 4567, "titulo" => "libro2", "descripcion" => "descripcion2", "categoria" => "ciencia", "editorial" => "B", "imagen" => "img/libro2.jpg", "precio" => 45.50),
            array("ISBN" => 7891, "titulo" => "libro3", "descripcion" => "descripcion3", "categoria" => "terror", "editorial" => "C", "imagen" => "img/libro3.jpg ", "precio" => 50.20),
            array("ISBN" => 4567, "titulo" => "libro2", "descripcion" => "descripcion2", "categoria" => "ciencia", "editorial" => "B", "imagen" => "img/libro2.jpg", "precio" => 45.50)
        );

        echo "<div class='container'>";
        echo "<div class='row'>";

        //Me quedo con los valores de la columna categoría, y los valores los meto en un array
        $categorias = array_column($productos, "categoria");
        //Quito repetidos
        $categorias = array_unique($categorias);

        foreach ($categorias as $categoria)
            pintarPorCategoria($productos, $categoria);

        echo "</div>";
        echo "</div>";


        ?>

    </div>
</body>

</html>