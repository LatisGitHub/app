<?php session_start(); ?>
<?php include('lib.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AHORCADO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script>
        let sonido = new Audio("imagenes/undertale.mp3");
        sonido.play();
    </script>
    <style>
        body {
           /* background-repeat: no-repeat;
            background-image: url('imagenes/fondo.jpg');
            background-size: cover;
*/          background-color:black;
        }

        img {
           
        }
    </style>
</head>

<body>
<img src="imagenes/doge.gif" alt="" style="margin-left:80%;">

    <div class='container'>
        <center>
            <img src="imagenes/ahorcado.png" alt="" >
            <div class='row'>
                <div class='col-3'>
                    <form action="controlador.php" method='get'>
                    </form>
                </div>

            </div>
        </center>
    </div>
    <center>
    <a href="controlador.php?letra=entrar" class="btn btn-danger mt-5 px-5">PLAY!</a>
    <BR>

        <img src="imagenes/BIENVENIDO.gif" alt="" width="30%" height="30%" style="margin-top:13%;">

    </center>
 

</body>

</html>