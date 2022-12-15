</div>
</div>
<!-- Page Wrapper -->
<div id="wrapper">
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Web de regalos 2022</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Bootstrap core JavaScript-->
<script src="plantilla/estilos/jquery/jquery.min.js"></script>
<script src="plantilla/estilos/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="plantilla/estilos/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="plantilla/js/sb-admin-2.min.js"></script>

<script src="plantilla/estilos/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="plantilla/js/demo/chart-area-demo.js"></script>
<script src="plantilla/js/demo/chart-pie-demo.js"></script>
<script src="plantilla/js/demo/chart-bar-demo.js"></script>





<!-- MODAL INSERTAR REGALO -->
<div class="modal fade" id="modalNuevoRegalo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo Regalo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id='formNuevoRegalo' class='row g-3 needs-validation'>
                    <div class='col-md-10'>
                        <label class='form-label'>Nombre</label>
                        <input type='text' class='form-control' name='nombre' required>
                    </div>
                    <div class='col-md-10'>
                        <label class='form-label'>Destinatario</label>
                        <input type='text' class='form-control' name='destinatario' required>
                    </div>
                    <div class='col-md-10'>
                        <label class='form-label'>Precio</label>
                        <input type='number' class='form-control' name='precio' required>
                    </div>
                    <div class='col-md-10'>
                        <label class='form-label'>Estado</label>
                        <select name="estado" id="estado">
                            <option value="PENDIENTE">PENDIENTE</option>
                            <option value="COMPRADO">COMPRADO</option>
                            <option value="ENVUELTO">ENVUELTO</option>
                            <option value="ENTREGADO">ENTREGADO</option>
                        </select>
                    </div>
                    <div class='col-md-10'>
                        <label class='form-label'>Año</label>
                        <input type='number' class='form-control' name='anio' required>
                    </div>
                    <input type="hidden" name="id_usuario" value="<?php unserialize($_SESSION['usuario'])->getId() ?>">
                    <input type='hidden' name='accion' value='crearRegalo'>
                    <button type="submit" accion='nuevoRegalo' class="btn btn-primary form-control">Crear</button>
                </form>
            </div>

        </div>
    </div>
</div>


<!-- MODAL INSERTAR ENLACE -->



</div>
</body>

</html>