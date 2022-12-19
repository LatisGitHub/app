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
                    <span>Web de Padel 2022</span>
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





<!-- MODAL INSERTAR PARTIDA -->
<div class="modal fade" id="modalNuevaPartida" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nueva Partida</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id='formNuevoRegalo' class='row g-3 needs-validation'>
                    <div class='col-md-10'>
                        <label class='form-label'>Fecha</label>
                        <input type="date" name="fecha">
                    </div>
                    <div class='col-md-10'>
                        <label class='form-label'>Hora</label>
                        <input type='text' class='form-control' name='hora' required>
                    </div>
                    <div class='col-md-10'>
                        <label class='form-label'>Ciudad</label>
                        <input type='text' class='form-control' name='ciudad' required>
                    </div>
                    <div class='col-md-10'>
                        <label class='form-label'>Lugar</label>
                        <input type='text' class='form-control' name='lugar' required>
                    </div>
                    <div class='col-md-10'>
                        <label class='form-label'>Cubierto</label>
                        <select name="cubierto" id="cubierto">
                            <option value="1">SI</option>
                            <option value="0">NO</option>
                        </select>
                        <input type='hidden' class='form-control' name='estado' value="abierta" required>
                    </div>     
                    <input type='hidden' name='accion' value='crearPartida'>
                    <button type="submit" accion='nuevaPartida' class="btn btn-primary form-control">Crear</button>
                </form>
            </div>

        </div>
    </div>
</div>


</body>

</html>