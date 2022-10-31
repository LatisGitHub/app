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
        let sonido3 = new Audio("imagenes/dogsong.mp3");
        sonido3.play();
    </script>
</head>

<body style="background-color:black;">
    <img src="imagenes/doge.gif" alt="" style="margin-left:80%;">
    <center> <img src="imagenes/ganar.gif"></center>
    <div class='container'>
        <center>
            <a href="juego.php" class="btn btn-danger ml-5">JUGAR DE NUEVO</a>
        </center>
    </div>
    <center>
        <img src="imagenes/hasganado.gif" alt="" width="30%" class="mt-3">

    </center>


</body>

</html>