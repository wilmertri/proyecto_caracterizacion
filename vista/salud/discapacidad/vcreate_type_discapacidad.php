<?php
	include ("controlador/cdiscapacidad.php");
	//include ("controlador/cclasediscapacidad.php");
?>
<h1>Agregar Tipo de Discapacidad</h1>
<div class="forms">
	<form name="form1" action="" method="post">
		<div class="row">
			<div class="form-group">
                <label for="Tipo de discapacidad">Tipo de discapacidad</label>
                <input name="tipodis" type="text" class="form-control">
            </div>
			<div class="form-group">
                <input type="submit" class="btn btn-success" value="Insertar">
                <a href="home.php" class="btn btn-success" >Salir</a>
            </div>
		</div>
    </form>
</div>
<?php require 'vlist_type_discapacidad.php'; ?>