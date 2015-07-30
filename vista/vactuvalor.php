<?php
 	include ("controlador/cparametro.php");
?>
<h1>Actualizar valor</h1>

<div class="forms1">
	<form name="form1" action="home.php?var=43" method="POST">		
		<div class="row">
			<div class="form-group col-lg-6 col-md-4 col-sm-12">
				<label for="">Código del valor:</label>
				<input type="text" name="codval" class="form-control" value="<?= $dat4[0]['codval'] ?>" disabled>	
				<input type="hidden" name="actu" value="actu">
				<input type="hidden" name="codval" value="<?= $dat4[0]['codval'] ?>">
			</div>
			<div class="form-group col-lg-6 col-md-4 col-sm-12">
				<label for="">Nombre del valor:</label>
				<input type="text" name="nomval" class="form-control" value="<?= $dat4[0]['nomval'] ?>">
			</div>
		</div>
		<div class="row">
			<div class="form-group col-lg-6">
				<input type="submit" value="Actualizar" class="btn btn-success">
			</div>
		</div>
	</form>
</div>
