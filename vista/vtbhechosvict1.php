<?php
	include("/controlador/ctbhechosvict.php");
?>
<h1> Actualizar Hechos Victimizantes </h1>
<div class="forms">
	<form name="form1" method="POST" action="home.php?var=28">
		<div class="row">
			<div class="form-group">
				<label for="Codigo_Hecho">Codigo</label>
				<input name="codhec" type="text" value = "<?php echo $dato1[0]['codhec'] ?>" class="form-control" disabled>
				<input type="hidden" name="actu" value="actu">
				<input type="hidden" name="codhec" value="<?php echo $dato1[0]["codhec"]; ?>">
			</div>
			<div class="form-group">
				<label for="Nombre_hecho">Nombre Hecho</label>
				<input class="form-control" type="text" name="nomhec" value="<?php echo $dato1[0]["nomhec"]; ?>">
			</div>
			<div class="form-group">
				<label for="Decripción_Hecho">Descripcion Hecho</label>
					<input class="form-control" type="text" name="deshec" value="<?php echo $dato1[0]["deshec"]; ?>">
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
				$dato = $ins -> selhec();
				for($i=0;$i<count($dato);$i++) {
			?>
			<tr>
				<td align = "left"><?php echo $dato[$i]["codhec"]; ?></td>
				<td align = "left"><?php echo $dato[$i]["nomhec"]; ?></td>
				<td align = "left"><?php echo $dato[$i]["deshec"]; ?></td>
				<td align = "center"><a href ="home.php?id=<?php echo $dato[$i]['codhec'] ?>&var=29" class="btn btn-success">Editar</a></td>
			</tr>
			<?php } ?>
		</table>
		
	</form>
</div>		