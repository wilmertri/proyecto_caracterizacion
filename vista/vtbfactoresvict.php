<?php
	include ("/controlador/ctbfactoresvict.php");
?>
<h1> Insertar Factores por los que vive en el Municipio </h1>
<div class="forms">
	<form name="form1" method="POST" action="">
		<div class="row">
			<div class="form-group">
				<label for="nomfactor">Nombre Factor</label>
				<input class="form-control" type="text" name="nomfactor">
			</div>
			<div class="form-group">
				<label for="desfactor">Descripcion Factor</label>
				<input class="form-control" type="text" name="desfactor">
			</div>
		</div>
		<div class="row">
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Insertar">
				<a href="home.php" class="btn btn-primary" >Salir</a>
			</div>
		</div>
	</form>
</div>
<div class="tbcenter">
	<form name="form1" method="POST" action="">
		<table width="700" class="table table-striped">
			<tr>
				<th align = "center">Codigo</th>
				<th align = "center">Nombre</th>
				<th align = "center">Descripcion</th>
				<th align = "center">Editar</th>
			</tr>
			<?php
				$dato = $ins -> selfac();
				for($i=0;$i<count($dato);$i++) {
			?>
			<tr>
				<td align = "left"><?php echo $dato[$i]["codfac"]; ?></td>
				<td align = "left"><?php echo $dato[$i]["nomfactor"]; ?></td>
				<td align = "left"><?php echo $dato[$i]["desfactor"]; ?></td>
				<td align = "center"><a href ="home.php?id=<?php echo $dato[$i]['codfac'] ?>&var=31" class="btn btn-primary">Editar</a></td>
			</tr>
			<?php } ?>
		</table>
	</form>
</div>