<?php
	include("/controlador/ctbfactoresvict.php");
?>
<h1> Actualizar Factores por los que vive en el Municipio </h1>
<div class="forms">
	<form name="form1" method="POST" action="home.php?var=30">
		<div class="row">
			<div class="form-group">
				<label for="Codigo_Factor">Codigo</label>
				<input name="codfac" type="text" value = "<?php echo $dato1[0]['codfac'] ?>" class="form-control" disabled>
				<input type="hidden" name="actu" value="actu">
				<input type="hidden" name="codfac" value="<?php echo $dato1[0]["codfac"]; ?>">
			</div>
			<div class="form-group">
				<label for="Nombre_Factor">Nombre Factor</label>
				<input class="form-control" type="text" name="nomfactor" value="<?php echo $dato1[0]["nomfactor"]; ?>">
			</div>
			<div class="form-group">
				<label for="Decripción_Factor">Descripcion Factor</label>
				<input class="form-control" type="text" name="desfactor" value="<?php echo $dato1[0]["desfactor"]; ?>">
			</div>
		</div>
		<div class="row">
			<div class="form-group">
				<input type="submit" class="btn btn-success" value="Actualizar">
				<a href="home.php" class="btn btn-success" >Salir</a>
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
				<td align = "center"><a href ="home.php?id=<?php echo $dato[$i]['codfac'] ?>&var=31" class="btn btn-success">Editar</a></td>
			</tr>
			<?php } ?>
		</table>
	</form>
</div>