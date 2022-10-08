<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>

<body>


    <div class="container">

        <?php
        /*Web videojuego. 
        Intenta hacer con diseño responsive (puedes usar Bootstrap) una web que muestre unas 7 fichas de personajes (o clases) 
        de un videojuego. Ten en cuenta que toda la información mostrada debe salir de un array. 
        Te recorres el array y muestras el resultado. Decide la información a mostrar, puedes usar alguna web de 
        ejemplo e imitar el estilo. Ten en cuenta también que cada elemento de un array puede ser a su vez un array. 
        Por ejemplo, para añadir varias características de un personaje, o varias fotos.*/

        function pintar($productos)
        {
            foreach ($productos as $valor) {
                echo "<div class='card mb-3' style='max-width: 540px;'>
                                <div class='row g-0'>
                                  <div class='col-md-4'>
                                    <img src='".$valor["imagen"]."' class='img-fluid rounded-start' alt='...' width=250px height=300px>
                                  </div>
                                  <div class='col-md-8'>
                                    <div class='card-body'>
                                      <h5 class='card-title'>Card title</h5>
                                      <p class='card-text'>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                      <p class='card-text'><small class='text-muted'>Last updated 3 mins ago</small></p>
                                    </div>
                                  </div>
                                </div>
                              </div>";

                /*Pintar las tres imágenes*/
                echo "<table class='table table-bordered blue-500'>";
                echo "<tr>";
                foreach ($valor['imagenes'] as $imagenMini) {
                    echo "<td>";
                    echo "<img src='". $imagenMini ." 'alt='...' width='40'>";
                    echo "</td>";
                }
                echo "</tr>";
                echo "</table>"; 

               
            }
        }


        //Productos de una tienda
        $productos = array(
            array("clase" => "barbaro", "descripcion" => "desc", "habilidades" => "1,2,3..", "imagen" => "img/erron.png", "imagenes" => array("img/1.jpg","img/1.jpg","img/1.jpg","img/1.jpg")),
            array("clase" => "barbaro", "descripcion" => "desc", "habilidades" => "1,2,3..", "imagen" => "img/scorpion.png"),
            array("clase" => "barbaro", "descripcion" => "desc", "habilidades" => "1,2,3..", "imagen" => "img/cassie.png")
        );
        /*
        //Pintar productos
        echo "<table class='table table-striped table-hover'>";
        echo "<thead class='text-primary'>";
        echo "  <tr>";
        //Sacamos el nombre de cada columna con array_keys del primer array (producto)
        foreach(array_keys($productos[0]) as $valor)
            echo "<td>".strtoupper($valor)."</td>";
        echo "  </tr>";
        echo "</thead>";
        echo "<tbody>";
        foreach($productos as $valor) {
            echo "<tr>";
            foreach($valor as $campo) {
                echo "<td>";
                echo $campo;
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        echo "<br><br>";
        */


        echo "<div class='container'>";
        echo "<div class='row'>";

        pintar($productos);




        echo "</div>";
        echo "</div>";



        ?>
</body>

</html>