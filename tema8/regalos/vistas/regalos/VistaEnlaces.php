<?php
class VistaEnlaces
{
  public static function render($enlaces)
  {
    include("cabecera2.php");

    echo '<a class="btn btn-info mb-3" style="float: right" href="#" data-toggle="modal" data-target="#modalNuevoEnlace">NUEVO ENLACE</a>';
    echo ' <div class="row justify-content-center">
    <div class="col-11">
        <div class="row justify-content-around rounded p-3 ">';
    foreach ($enlaces as $enlace) {

      echo '<div class="col-md-3 position-relative mt-5 m-1">
      <div class="card" style="width: 18rem;">
      <img src="' . $enlace->getImagen() . '" alt="...">
          <div class="card-body">
              <h5 class="card-title text-center">' . $enlace->getNombre() . '</h5>
              <center> <p class="card-text">' . $enlace->getUrl() . '</p> </center>
              <p class="card-text text-center">' . $enlace->getPrecio() . '€</p>
              <center>
              <p> PRIORIDAD </p>
              <p><input type="range" min="1" max="3" value="' . $enlace->getPrioridad() . '"> </p>
              <a href="enrutador.php?accion=borrarenlace&id=' . $enlace->getId() . '&regalo=' . $enlace->getId_Regalo() . '" class="btn btn-danger">Borrar</a>
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

    echo '<div class="modal fade" id="modalNuevoEnlace" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo Enlace</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formNuevoEnlace" class="row g-3 needs-validation">
                    <div class="col-md-10">
                        <label class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" required>
                    </div>
                    <div class="col-md-10">
                        <label class="form-label">Url</label>
                        <input type="text" class="form-control" name="url" required>
                    </div>
                    <div class="col-md-10">
                        <label class="form-label">Precio</label>
                        <input type="number" class="form-control" name="precio" required>
                    </div>
                    <div class="col-md-10">
                        <label class="form-label">Imagen</label>
                        <input type="text" class="form-control" name="imagen" required>
                    </div>
                    <div class="col-md-10">
                        <label class="form-label">Prioridad</label>
                        <input name="prioridad" type="range" min="1" max="3" >
                    </div>
                    <input type="hidden" name="id_regalo" value="'.$_SESSION['id_regalo'].'">
                    <input type="hidden" name="accion" value="crearEnlace">
                    <button type="submit" accion="nuevoEnlace" class="btn btn-primary form-control">Crear</button>
                </form>
            </div>

        </div>
    </div>';
  }
}
