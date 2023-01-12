<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APIs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <div class='container'>
        <row class="justify-content">
            <div class="container fluid col-2 md-3">
                <img src="img/logo.jpg" alt="" class="img-fluid">
            </div>
        </row>

        <nav class="navbar navbar-expand-lg navbar-light bg-primary p-3" style="border-radius: 5px ;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">HOME</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">NOVEDADES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">NOTICIAS</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                FILTRACIONES </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">ÚLTIMA SEMANA</a></li>
                                <li><a class="dropdown-item" href="#">ÚLTIMO MES</a></li>
                                <li><a class="dropdown-item" href="#">ÚLTIMO AÑO</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                RECOMENDACIONES </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">TRENDING</a></li>
                                <li><a class="dropdown-item" href="#">SHOOTERS</a></li>
                                <li><a class="dropdown-item" href="#">HISTORIA</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row mt-3 align-items-center ">
            <div class="col-md-6">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/hfJ4Km46A-0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>




            <div class="col-md-6 mb-6 text-right">
                <h3 class="text-primary">ÚLTIMAS NOVEDADES</h3>
                <P>Tras convertirse en una de las grandes franquicias de la familia PlayStation,
                    la saga God of War vuelve con el nuevo God of War Ragnarok para PS5 y, con ello, la épica
                    continuación de la historia de Kratos
                    y su hijo Atreus por parte de Sony Santa Monica. </P>
            </div>



        </div>
        <hr style="height:10px;color: blue ;">
        <h1 class="text-center text-primary"> COLECCIÓN DE VIDEOJUEGOS </h1>

        <div class='row'>

            <?php

            $key = "?key=950ab5372ce3467b8c4b888edb837781";

            //$uri = "https://api.themoviedb.org/3/genre/tv/list?language=es&".$key;       
            $uri = "https://api.rawg.io/api/games" . $key;

            $resultado = file_get_contents($uri, false);

            //Pasar de json a objeto php y recorrer los resultados
            if ($resultado != false) {
                $respPHP = json_decode($resultado);

                /*$generos = "";
                foreach($respPHP->platforms as $rating) {
                    $generos .= $rating->name . " ";
                }*/
                foreach ($respPHP->results as $juego) {
                    echo "<div class='card m-3' style='width: 25rem;'>";
                    echo "<img width='220' height='200' class='card-img-top' src='" . $juego->background_image . "'>";
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title text-primary">' . $juego->name . '</h5>';
                    echo '<p class="card-text">' . $juego->rating_top . '</p>';
                    echo '<p class="card-text">' . $juego->released . '</p>';
                    echo '<a href="#" class="btn btn-primary">'. $juego -> rating. '</a>';
                    echo '<a href="#" class="btn btn-primary ms-6">'. $juego -> rating_top. '</a>';
                    foreach($juego->platforms as $platform){
                        echo $platform->platform->name;
                    }

                    echo '</div>';
                    echo "</div>";
                }
            }



            ?>

        </div>
        <hr style="height:10px;color: blue ;">

        <h1 class="text-center text-primary"> RECOMENDACIONES</h1>

        <div class="row justify-content-center">
            <div class="col-11">
                <div class="row justify-content-around rounded p-3 m-2">
                    <div class="col-md-3 position-relative">
                        <div class="card" style="width: 18rem;">
                            <img src="img/juego1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title-text-center">VALORANT</h5>
                                <p class="card-text">Valorant es un juego de disparos en primera persona en el que
                                    dos equipos de cinco jugadores se enfrentan entre ellos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 position-relative">
                        <div class="card" style="width: 18rem;">
                            <img src="img/war.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">COD: WARZONE</h5>
                                <p class="card-text">Es un juego que nos permitirá caer en una isla con otros 150
                                    jugadores para comprobar quién es el último que queda en pie.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 position-relative">
                        <div class="card" style="width: 18rem;">
                            <img src="img/lol.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">LEAGUE OF LEGENDS</h5>
                                <p class="card-text">LOL es un juego de estrategia por equipos en el que dos equipos
                                    de cinco tratan de destruir antes la base del otro.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <nav class="navbar navbar-light bg-primary text-center" style="border-radius: 5px ;">
                    <div class="col-md-6" >
                        <h2 class="text-light ">VideoGame Entertainer Lati</h2>
                    </div>
                    <div class="col-md-6 ">
                        <div class="row p-2 justify-content-center">
                            <div class="col-2">
                                <img src="img/twitter.png" style="width: 80%;" class="img-fluid rounded">
                            </div>
                            <div class="col-2">
                                <img src="img/facebook.png" style="width: 80%;" class="img-fluid rounded">
                            </div>
                            <div class="col-2">
                                <img src="img/youtube.png" style="width: 80%;" class="img-fluid rounded">
                            </div>
                        </div>

                    </div>
                </nav>


        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
        <script>
            $(function() {
                //Habilita los tooltips
                $('[data-toggle="tooltip"]').tooltip({
                    container: 'body'
                });
            });
        </script>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>