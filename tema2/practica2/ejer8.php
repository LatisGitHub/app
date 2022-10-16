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
    <center> <img src="img/f1logo.png" width="60%"></center>
    <br> <br>
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
        echo " <center> <div class='card mb-3' style='max-width:900px; border-color: red; border-width:3px'>
                                <div class='row g-0'>
                                  <div class='col-md-4'>
                                    <img src='" . $valor["imagen"] . "' class='img-fluid rounded-start' alt='...' width=250px height=300px>
                                  </div>
                                  <div class='col-md-8'>
                                    <div class='card-body'>
                                      <h5 class='card-title'>". $valor["piloto"]     ."</h5>
                                      <p class='card-text'>" .  $valor["descripcion"]  .  "</p>
                                      <p class='card-text'> <b>" .  $valor["equipo"]  .  " </b></p>
                                      <p class='card-text'> <b> POSICIÓN EN LAS ÚLTIMAS CARRERAS </b></p>";

                                      echo "<table class='table table-bordered blue-500'>";
                                      echo "<tr>";
                                      foreach ($valor['resultados'] as $res) {
                                          echo "<td> <center>";
                                          echo  $res ;
                                          echo "</td></center>";
                                      }
                                      echo "</tr>";
                                      echo "</table>"; 


                                    echo "</div>
                                  </div>
                                </div>
                              </div> </center>";
      }
    }


    //Productos de una tienda
    $productos = array(
      array("piloto" => "Fernando Alonso", "descripcion" => "Fernando Alonso Díaz (Oviedo, Asturias, 29 de julio de 1981) es un piloto de automovilismo español.", "habilidades" => "1,2,3..", "imagen" => "img/falonso.png", "equipo"=> "ALPINE", "resultados" => array("c1"=> 1, "c2"=> 3, "c3"=> 4,  "c3"=> 1, "c4"=> 2)),
      array("piloto" => "Max Verstappen", "descripcion" => "Max Emilian Verstappen (Hasselt, 30 de septiembre de 1997) es un piloto neerlandés de automovilismo nacido en Bélgica.", "imagen" => "img/max.png","equipo"=> "RED BULL", "resultados" => array("c1"=> 2, "c2"=> 3, "c3"=> 8,  "c4"=> 4)),
      array("piloto" => "Charles Leclerc", "descripcion" => "Charles Marc Hervé Perceval Leclerc, Montecarlo (Mónaco, 16 de octubre de 1997), más conocido como Charles Leclerc, es un piloto de automovilismo monegasco.", "imagen" => "img/f1_2022_cl_fer_lg.png", "equipo"=> "SCUDERIA FERRARI", "resultados" => array("c1"=> 3, "c2"=> 6, "c3"=> 4,  "c4"=> 2)),
      array("piloto" => "Lewis Hamilton", "descripcion" => "Lewis Carl Davidson Larbalestier Hamilton​ (Stevenage, Hertfordshire, 7 de enero de 1985) es un piloto británico de automovilismo. ","imagen" => "img/hamilton.png", "equipo"=> "MERCEDES-AMG PETRONAS", "resultados" => array("c1"=> 5, "c2"=> 6, "c3"=> 4,  "c3"=> 1, "c4"=> 1)),
      array("piloto" => "Mick Schumacher", "descripcion" => "Mick Schumacher (Suiza, 22 de marzo de 1999) es un piloto de automovilismo alemán nacido en Suiza.", "imagen" => "img/mick.png", "equipo"=> "HAAS", "resultados" => array("c1"=> 6, "c2"=> 3, "c3"=> 7,  "c3"=> 8, "c4"=> 6)),

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