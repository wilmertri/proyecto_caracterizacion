<?php
	include ("controlador/cfactoresperm.php");
?>
<h1> <?= ($idper) ? 'Actualizar' : 'Insertar' ?> factor de permanencia en el municipio de la persona </h1>
<div class="forms">
	<form name="form1" method="POST" action="">
		<div class="row">
			<div class="form-group">
				<label for="nomfactor">Seleccione factor de permanencia</label>
				<select name="factorperm" id="" class="form-control">
					<option value="">Seleccione</option>
					<?php 
						for ($i=0; $i < count($factores); $i++) 
						{
					?> 
					<option value="<?= $factores[$i]['idfactor'] ?>"><?= $factores[$i]['nomfact']  ?></option>
					<?php
						} 
					?>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="form-group">
				<input type="submit" class="btn btn-success" value="<?= ($idper) ? 'Actualizar' : 'Insertar' ?>">
				<a href="" class="btn btn-success" >Volver</a>
			</div>
		</div>
	</form>
</div>
<div class="tbcenter">
	<table width="700" class="table">
		<tr>
			<th align = "center">#</th>
			<th align = "center">Nombre factor</th>
			<th align = "center">Editar</th>
		</tr>
		<?php
			$dato = $ins->selfacxper();
			for($i=0;$i<count($dato);$i++) {
		?>
		<tr>
			<td><?= $i + 1 ?></td>
			<td><?= nombrefact($dato[$i]["idfactores"], $ins); ?></td>
			<td><a href ="home.php?idactu=<?= $dato[$i]['idperfac'] ?>&var=30" class="btn btn-success">Editar</a></td>
		</tr>
		<?php } ?>
	</table>
</div>
<?php  
	if ($valid == 1) 
	{
		$ins->validacion_ingreso();
	}
?>