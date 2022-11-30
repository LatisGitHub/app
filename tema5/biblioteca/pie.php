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
                    <span>Copyright &copy; Your Website 2022</span>
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
<script src="./vendor/jquery/jquery.min.js"></script>
<script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="./vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<script src="./vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>
<script src="js/demo/chart-bar-demo.js"></script>

<!-- MODAL INSERTAR TAREA -->
<div class='modal fade' id='insertarPrestamo' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <div class='modal-header'>
                <h5 class='modal-title' id='exampleModalLabel'>Nuevo prestamo</h5>
            </div>
            <div class='modal-body'>
                <form id='formInsertarPrestamo'>
                    <div class='mb-3'>
                        <label for='nombre' class='form-label'>ISBN</label>
                        <input type='text' name='nombre' class='form-control'>
                    </div>
                    <div class='mb-3'>
                        <label for='descripcion' class='form-label'>DNI</label>
                        <textarea class='form-control' name='descripcion' id='' cols='30' rows='5'></textarea>
                    </div>
                    <div class='mb-3'>
                        <label for='genero' class='form-label'>Fecha inicio</label>
                        <input type="date" id="start" name="trip-start">
                    </div>
                    <div class='mb-3'>
                        <label for='plataforma' class='form-label'>Fecha fin</label>
                        <input type="date" id="start" name="trip-start">
                    </div>
                </form>
            </div>
            <div class='modal-footer'>
                <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cerrar</button>
                <button type='submit' name='insertarPrestamo' class='btn btn-primary' form='formInsertarPrestamo' formaction='controlador.php' formmethod='get'>Añadir</button>
            </div>
        </div>
    </div>
</div>
</div>
</body>




</html>";


</body>

</html>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>