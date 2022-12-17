<?php
class VistaEnlaces
{
  public static function render($enlaces)
  {
    include("cabecera2.php");

    echo '<a class="btn btn-info mb-3" style="float: right" href="#" data-toggle="modal" data-target="#modalNuevoEnlace">NUEVO ENLACE</a>';
     //echo "<form> <input type='hidden' name='idregalo' value='". $_REQUEST['idregalo']."'>
          //  <input type='hidden' name='accion' value='ordenar'>
           // <button type='submit' class='btn btn-info'>ORDENAR</button>
    //</form>";
    echo '<td><a href="enrutador.php?accion=ordenar&idregalo='. $_REQUEST['idregalo'].'" class="btn btn-success">ORDENAR↓</a> </td>';

    echo ' <div class="row justify-content-center">
    <div class="col-11">
        <div class="row justify-content-around rounded p-3 ">';
    foreach ($enlaces as $enlace) {

      echo '<div class="col-md-3 position-relative mt-5 m-1">
      <div class="card" style="width: 18rem;">
      <img src="' . $enlace->getImagen() . '" alt="...">
          <div class="card-body">
              <h5 class="card-title text-center">' . $enlace->getNombre() . '</h5>
              <center> <a class="card-text" href="'. $enlace->getUrl().'">' . $enlace->getUrl() . '</a> </center>
              <p class="card-text text-center">' . $enlace->getPrecio() . '€</p>
              <center>
              <p> PRIORIDAD </p>
              <p><input type="range" min="1" max="3" value="' . $enlace->getPrioridad() . '"> </p>
              <a href="enrutador.php?accion=borrarenlace&idenlace=' . $enlace->getId() . '&regalo=' . $enlace->getId_Regalo() . '" class="btn btn-danger">Borrar</a>
              </button> 
              </center>
              </div>
          </div>
          </div>
          ';
          $_SESSION['id_regalo'] = $enlace->getId_Regalo();
    }
    echo '</div>
    </div>
    </div>';

    


    include("pie2.php");
   
    
  }
}
