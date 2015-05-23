<?php
	include ("/controlador/ctbhechosvict.php");
?>
<h1> Insertar Hechos Victimizantes </h1>
<div class="forms">
	<form name="form1" method="POST" action="">
		<div class="row">
			<div class="form-group">
				<label for="nomhec">Nombre Hecho</label>
				<input class="form-control" type="text" name="nomhec">
			</div>
			<div class="form-group">
				<label for="deshec">Descripcion Hecho</label>
				<input class="form-control" type="text" name="deshec">
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
				$dato = $ins -> selhec();
				for($i=0;$i<count($dato);$i++) {
			?>
			<tr>
				<td align = "left"><?php echo $dato[$i]["codhec"]; ?></td>
				<td align = "left"><?php echo $dato[$i]["nomhec"]; ?></td>
				<td align = "left"><?php echo $dato[$i]["deshec"]; ?></td>
				<td align = "center"><a href ="home.php?id=<?php echo $dato[$i]['codhec'] ?>&var=29" class="btn btn-primary">Editar</a></td>
			</tr>
			<?php } ?>
		</table>
		
	</form>
</div>