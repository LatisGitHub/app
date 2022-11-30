<?php include("cabecera.php"); ?>
<?php include("lib.php"); ?>
<?php
echo '<label for="start">DNI:</label>';
echo '<input type="text">	';


echo '<form action="/action_page.php">
        <label for="estado">Elige un estado</label>
        <select name="cars" id="cars">
        <option value="activo">activo</option>
        <option value="devuelto">devuelto</option>
        <option value="sobrepasado1Mes">sobrepasado1Mes</option>
        <option value="sobrepasado1Año">sobrepasado1Año</option>
        </select>
        <br><br>
        <input type="submit" value="submit">
    </form>';



echo '<td><a href="controlador.php?accion=finalizar&id=' . "id" . '" class="btn btn-primary">PROCESAR</a> </td>';
echo '<a class="collapse-item btn btn-primary" href="#" data-toggle="modal" data-target="#insertarPrestamo"> Insertar Prestamo</a>';

pintarPrestamos();

?>
<?php include("pie.php"); ?>
