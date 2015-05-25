<?php
	include ("controlador/cfactoresperm.php");
?>
<h1> <?= ($id) ? 'Actualizar' : 'Insertar' ?> factor de permanencia en el municipio </h1>
<div class="forms">
	<form name="form1" method="POST" action="">
		<div class="row">
			<div class="form-group">
				<label for="nomfactor">Nombre Factor</label>
				<?php if ($id): ?>
					<input type="text" name="nomfactor" class="form-control" value="<?= $dato1[0]['nomfact'] ?>">
					<input type="hidden" name="actu" value="actu">
					<input type="hidden" name="codfac" value="<?= $dato1[0]['idfactor'] ?>">
				<?php else: ?>
					<input class="form-control" type="text" name="nomfactor">
				<?php endif ?>
			</div>
		</div>
		<div class="row">
			<div class="form-group">
				<input type="submit" class="btn btn-success" value="<?= ($id) ? 'Actualizar' : 'Insertar' ?>">
				<a href="home.php" class="btn btn-success" >Salir</a>
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
			$dato = $ins->selfac();
			for($i=0;$i<count($dato);$i++) {
		?>
		<tr>
			<td><?= $i + 1 ?></td>
			<td><?= $dato[$i]["nomfact"]; ?></td>
			<td><a href ="home.php?id=<?= $dato[$i]['idfactor'] ?>&var=30" class="btn btn-success">Editar</a></td>
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