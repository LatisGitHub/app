<?php
class VistaChatMenu
{
    public static function mostrarChatMenu()
    {
        echo '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APIs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>';

        echo '<body>
    <div class="container">
        <row class="justify-content">
            <div class="container fluid col-2 md-3">
                <img src="img/logo2.jpg" alt="" class="img-fluid rounded mt-1 mb-2">
            </div>
        </row>';

        echo '<nav class="navbar navbar-expand-lg navbar-light bg-primary p-3" style="border-radius: 5px ;">
            <div class="container-fluid">
            <a class="navbar-brand text-light" href="http://localhost:8080/tema8/chatgpt/blog/enrutador.php?accion=mostrarArticulos">CHATGPT ARTICULOS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                   
                </div>
            </div>
        </nav>
        ';
        echo '
       </h1>
       <h1 class="text-center mt-3"> INSERTA EL TEXTO A BUSCAR </h1>
       <form action="enrutador.php" method="post"> 
        <div class="input-group">
            <span class="input-group-text">CHATGPT</span>
            <textarea class="form-control" aria-label="With textarea" rows="20" cols="50" name="articulo"></textarea>
        </div>
        <input type="hidden" name="accion" value="generarArticulo">
        <center> <button type="submit" class="btn btn-primary mt-2 mb-3">GENERAR</button></center>
        </form>
       ';








        echo '
        <hr  class="mb-5" style="height:10px;color: blue ;">';






        echo '<nav class="navbar navbar-light bg-primary text-center" style="border-radius: 5px ;">
                <div class="col-md-6">
                    <h2 class="text-light ">ChatGPT LATI</h2>
                </div>
                <div class="col-md-6 ">
                    <div class="row p-2 justify-content-center">
                        <div class="col-2">
                            <img src="img/twitter2.png" style="width: 70%;" class="img-fluid rounded">
                        </div>
                        <div class="col-2">
                            <img src="img/facebook2.png" style="width: 60%;" class="img-fluid rounded">
                        </div>
                        <div class="col-2">
                            <img src="img/youtube2.png" style="width: 80%;" class="img-fluid rounded">
                        </div>
                    </div>

                </div>
            </nav>';


        echo '</div>';

        echo '<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
        <script>';
        /*  $(function() {
                //Habilita los tooltips
                $('[data-toggle="tooltip"]').tooltip({
                    container: 'body'
                });
            });*/
        echo '</script>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>';
    }
}
