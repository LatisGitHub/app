<?php

class VistaNuevoPrestamo
{


    public static function formulario($usuarios, $libros)
    {

        include_once("cabecera2.php");
        //id, idUsuario, idLibro, fecha_inicio, fecha_fin, estado
        echo '
        <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
          <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
              <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
    
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4"> NUEVO PRÉSTAMO </h1>
                  </div>
                  <form class="user" action="enrutador.php" method="post">';
        echo '<div class="form-group">';
        echo "<label> SELECCIONA EL USUARIO </label>";
        echo '<select name="idLibro" id="libro" class="form-control" >';

        foreach ($usuarios as $usuario) {
            echo '<option value="' . $usuario->id . '"> ' . $usuario->nombre . '</option>';
        }
        echo '</select>';
        echo "</div>";
        echo '<div class="form-group">';
        echo "<label> SELECCIONA EL LIBRO </label>";
        echo '<select name="idUsuario" id="idUsuario" class="form-control">';
        foreach ($libros as $libro) {
            echo '<option value="' . $libro->id . '"> ' . $libro->titulo . '</option>';
        }
        echo '</select>';
        echo "</div>";
        echo '<div class="form-group">';
        echo '<label > FECHA INICIO </label>
                <input type="date" name="fecha_inicio">
                <label style="margin-left:35%"> FECHA FIN </label>
                <input type="date" name="fecha_fin">
                </div>
                
                <div class="form-group">
                <label> ESTADO </label>
                <select name="estado" id="estado" class="form-control"*>  
                
                <option value="ACTIVO">ACTIVO</option>
                <option value="DEVUELTO">DEVUELTO</option>
                <option value="SOBREPASADO">SOBREPASADO 1 MES</option>
                <option value="SOBREPASADO1YEAR">SOBREPASADO 1 YEAR</option>
              </select></div>';
        echo '<input type="hidden" name="accion" value="insertarPrestamo">
              <button type="submit" class="btn btn-info btn-user btn-block">
               INSERTAR 
              </button>
              
              </form>
              </div>
              </div>          
              </div>          
              </div>          
              </div>          
              </div>';
        include_once("pie2.php");
    }
}
