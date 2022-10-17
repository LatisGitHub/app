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

        <center>
            <h1>LIBRERIA DE LATI</h1>
        </center>

        <?php
        function pintarPorCategoria($productos, $categoria)
        {
            echo "<h3> " . strtoupper($categoria) . "</h3><br><br>";
            $cont = 0;
            foreach ($productos as $valor) {
                if ($valor['categoria'] == $categoria) {

                    if ($cont == 4)
                        break;
                    $cont++;

                    echo "<div class='card mb-5' style='width: 19rem; margin:5px;'>
                        <img src='" . $valor["imagen"] . "' class='card-img-top' alt='...' width=300px height=395px>
                            <div class='card-body'>
                            <h5 class='card-title'> <b>" . strtoupper($valor["titulo"]) . "</b></h5>
                            <p class='card-text'>" . $valor['descripcion'] . "</p>
                            <p class='card-text'>  <center>" . 'ISBN: ' . $valor['ISBN'] . "</center></p>";
                    echo "
                        <center>  <p class='card-text'><small class='text-secondary'>" . $valor["precio"] . " €</small></p><center> 

                            <center> <a href='#' class='btn btn-primary'>  Comprar </a></center>
                        </div>
                    </div>";
                }
            }
        }


        //Productos de una tienda
        $productos = array(
            array("ISBN" => 9780307588364, "titulo" => "PERDIDA", "descripcion" => "En un caluroso día de verano, Amy y Nick se disponen a celebrar su quinto aniversario de bodas pero Amy desaparece esa misma mañana sin dejar rastro. A medida que la investigación policial avanza las sospechas recaen sobre Nick. Sin embargo, este insiste en su inocencia. Es cierto que se muestra extrañamente evasivo y frío. ¿Será el asesino?", "categoria" => "thriller", "editorial" => "B", "imagen" => "img/perdida.jpg", "precio" => 39.99),
            array("ISBN" => 9788804397410, "titulo" => "ASESINATO EN EL ORIENT EXPRESS", "descripcion" => "La novela más famosa protagonizada por el detective Hércules Poirot se desarrolla a bordo de un tren, el Orient Express, atrapado por una tormenta de nieve en un lugar remoto de la antigua Yugoslavia. El asesinato de un pasajero y los doce sospechosos del vagón en el viajaba son el epicentro de la narración.", "categoria" => "thriller", "editorial" => "B", "imagen" => "img/express.jpg", "precio" => 25.70),
            array("ISBN" => 9780375405389, "titulo" => "EL PODER DEL PERRO", "descripcion" => "El gobierno de los Estados Unidos emprende una lucha sin cuartel contra el narcotráfico en México. Art Keller, un joven agente de la DEA de origen hispano no tarda en obtener resultados y acabar con el patrón local.", "categoria" => "thriller", "editorial" => "C", "imagen" => "img/perro.jpg ", "precio" => 28),
            array("ISBN" => 9788420741468, "titulo" => "CRIMEN Y CASTIGO", "descripcion" => "Un estudiante sin recursos llamado Raskolnikov roba y mata a una anciana codiciosa porque considera que es un parásito social. Por mucho que se repite a sí mismo que el crimen está justificado, pasan los días y el sentimiento de culpa crece y no le deja vivir.", "categoria" => "thriller", "editorial" => "B", "imagen" => "img/crimen.jpg", "precio" => 33),
            array("ISBN" => 8467911387, "titulo" => "The Boys", "descripcion" => "The Boys está ambientada en un universo en el que los individuos superpoderosos son reconocidos como héroes por el público en general y trabajan para la poderosa corporación Vought International, que los comercializa y monetiza. Fuera de sus personajes heroicos, la mayoría son arrogantes, egoístas y corruptos.", "categoria" => "COMICS", "editorial" => "B", "imagen" => "img/theboys2.jpeg", "precio" => 35.50),
            array("ISBN" => 9781607067979, "titulo" => "The Walking Dead", "descripcion" => "El comic presenta un gran elenco como sobrevivientes de un apocalipsis zombie, tratando de mantenerse con vida bajo la amenaza casi constante de ataques de los zombis sin conciencia, coloquialmente conocidos como «caminantes».", "categoria" => "COMICS", "editorial" => "B", "imagen" => "img/twd.jpg", "precio" => 18),
            array("ISBN" => 9788496587472, "titulo" => "Invencible", "descripcion" => "Cuando Mark Grayson hereda superpoderes con 17 años, se convierte en uno de los superhéroes más grandes de la Tierra, junto con su padre. Todos sus sueños anhelados desde que era niño se hacen realidad... hasta que sucede algo que lo cambia todo.", "categoria" => "COMICS", "editorial" => "B", "imagen" => "img/invencible.jpg", "precio" => 21),
            array("ISBN" => 9783741618420, "titulo" => "deadpool kills the marvel universe", "descripcion" => "Deadpool es internado por los X-Men, a ver si al fin logran ayudar su perturbada mente. Lamentablemente, a cargo de la institución está secretamente Psycho Man, quien pretende utilizarlo a él y a otra tanda de villanos para crear un ejército personal.", "categoria" => "COMICS", "editorial" => "B", "imagen" => "img/deadpool.jpg", "precio" => 10.50),  
            array("ISBN" => 9781646512782, "titulo" => "Ataque a los titanes", "descripcion" => "Desde hace 100 años los titanes aparecieron de la nada y llevaron a la humanidad al borde de la extinción; la población vive encerrada en ciudades rodeadas de enormes muros. Eren Jaeger, un joven cansado del conformismo, sueña con el mundo exterior.", "categoria" => "manga", "editorial" => "A", "imagen" => "img/aot.jpg", "precio" => 12.50),
            array("ISBN" => 8417099417, "titulo" => "Jojo's Bizarre Adventure", "descripcion" => "Jojo's Bizarre Adventure sigue las aventuras de todas las generaciones de la familia Joestar, desde finales del siglo XIX hasta la actualidad. Todos los miembros de la familia tienen poderes, que son una fuerza psíquica intensa.", "categoria" => "manga", "editorial" => "B", "imagen" => "img/jojos.jfif", "precio" => 20),
            array("ISBN" => 8417490094, "titulo" => "Dr Stone", "descripcion" => "¿Qué pasaría si, de repente, la civilización tal y como la conocemos dejara de existir? Ese es el punto de partida de la interesante trama de Dr. Stone. Todo comienza con un inesperado resplandor que petrifica a toda la humanidad… Y no empieza a despertar de su letargo hasta miles de años después. ", "categoria" => "manga", "editorial" => "B", "imagen" => "img/drstone.jfif", "precio" => 15),
            array("ISBN" => 9781632362223, "titulo" => "Una voz silenciosa", "descripcion" => "La historia gira en torno a Shôko Nishimiya, una estudiante de primaria que es sorda y que al cambiarse de colegio comienza a sentir el bullying de sus nuevos compañeros. Uno de los principales responsables es Ishida Shôya quien termina por forzar que Nishimiya se cambie de escuela. Años después, Ishida busca la redención de sus malas acciones.", "categoria" => "manga", "editorial" => "A", "imagen" => "img/silentvoice.jpg", "precio" => 18),
            array("ISBN" => 9788467930887, "titulo" => "The Promised Neverland", "descripcion" => "La obra narra la historia de unos niños huérfanos, liderados por una joven de once años llamada Emma, que tratan de escapar del orfanato en el que vivían engañados y el cual esconde un oscuro secreto.", "categoria" => "manga", "editorial" => "B", "imagen" => "img/tpn.jpg", "precio" => 45.50),
            array("ISBN" => 9788491670155, "titulo" => "Berserk", "descripcion" => "Berserk nos cuenta la historia de Guts, un antihéroe mercenario que vaga por el mundo en solitario en búsqueda de Apóstoles, unos seres demoníacos que antaño fueron humanos pero que sacrificaron una parte importante de sus vidas para conseguir poderes que les permitieran alcanzar sus más oscuros deseos.", "categoria" => "manga", "editorial" => "C", "imagen" => "img/berserk.jpg ", "precio" => 11.70),
            array("ISBN" => 7891, "titulo" => "libro3", "descripcion" => "descripcion3", "categoria" => "thriller", "editorial" => "C", "imagen" => "img/libro3.jpg ", "precio" => 50.20),
        );

        echo "<div class='container'>";
        echo "<div class='row'>";

        $categorias = array_column($productos, "categoria");
        $categorias = array_unique($categorias);

        foreach ($categorias as $categoria)
            pintarPorCategoria($productos, $categoria);

        echo "</div>";
        echo "</div>";


        ?>

    </div>
</body>

</html>