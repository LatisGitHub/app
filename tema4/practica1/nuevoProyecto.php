<?php
include("cabecera.php");

?>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->

            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Crear un nuevo Proyecto</h1>
              </div>
              <form class="user" action="controlador.php" method="post">
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" name="email" placeholder="Introduce el nombre">
                    </div>
                    <div class="form-group">
                        <input type="text" name="fechaInicio" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" name="email" placeholder="Introduce la fecha de inicio">
                    </div>
                    <div class="form-group">
                        <input type="text" name="fechaFinPrevista" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" name="email" placeholder="Introduce la fecha prevista">
                    </div>
                    <div class="form-group">
                        <input type="text" name="diasTranscurridos" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" name="email" placeholder="Introduce los dias transcurridos">
                    </div>
                    <div class="form-group">
                        <input type="text" name="porcentajeCompletado" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" name="email" placeholder="Introduce el porcentaje completado">
                    </div>
                    <div class="form-group">
                        <input type="text" name="importancia" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" name="email" placeholder="Introduce la importancia -> 1 al 5">
                    </div>
                    <input type="hidden" name="accion" value="formulario">
                    <button type="submit" name="nuevoProyecto" class="btn btn-primary btn-user btn-block">
                        ENVIAR
                    </button>

                </form>
              <hr>
            </div>
          </div>
  
        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>


<?php



?>

<?php

include("pie.php");

?>