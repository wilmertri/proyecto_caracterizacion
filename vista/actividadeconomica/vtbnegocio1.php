<?php
	include("controlador/ctbnegocio.php");
?>
<h1> Actualizar Negocio </h1>
<div class="forms">
	<form name="form1" method="POST" action="home.php?var=18&id=<?php echo $dato1[0]['idpersona'] ?>">
		<div class="row">
			<div class="form-group">
				<label for="Codigo_Negocio">Codigo</label>
				<input name= "codnegper" class="form-control" value="<?php echo $dato2[0] ['codnegper'] ?>" disabled >
				<input type="hidden" name="actu" value="actu">
				<input type="hidden" name="codnegper" value="<?php echo $dato2[0]["codnegper"]; ?>">
			</div>
			<div class="form-group">
				<label for="Labor_Negocio">Labor</label>
				<input class="form-control" type="text" name="labneg" value="<?php echo $dato2[0]["labneg"]; ?>">
			</div>
			<div class="form-group">
				<label for="Tipo_Negocio">Tipo</label>
				<input class="form-control" type="text" name="tipneg" value="<?php echo $dato2[0]["tipneg"]; ?>">
			</div>
			<div class="form-group">
				<label for="Duracion_Negocio">Duracion</label>
				<select name="durneg" class="form-control">
					<option value ="<?= $dato1[0]['durneg'] ?>"> Seleccione una opción </option>
					<?php 
						for ($i=0; $i < count($durneg1); $i++){
					?>
					<option value ="<?php echo $durneg1[$i]['codval'] ?>" ><?php echo $durneg1[$i]['nomval'] ?></option>
					<?php 
						} 
					?>
				</select>
			</div>
			<div class="form-group">
				<label for="Direccion_Negocio">Direccion</label>
				<input class="form-control" type="text" name="dirneg" value="<?php echo $dato2[0]["dirneg"]; ?>">
			</div>
			<div class="form-group">
				<label for="negactper">Esta activo el negocio?</label>
				<select name="negactper" class="form-control">
					<option value ="<?= $dato1[0]['negactper'] ?>"> Seleccione una opción </option>
					<?php 
						for ($i=0; $i < count($negactper1); $i++){
					?>
					<option value ="<?php echo $negactper1[$i]['codval'] ?>" ><?php echo $negactper1[$i]['nomval'] ?></option>
					<?php 
						} 
					?>
				</select>
			</div>
		</div>
		<div class="form-group">
                <input type="submit" class="btn btn-success" value="Actualizar">
				<a href="home.php?var=91&id=<?= $id ?>" class="btn btn-success">Volver</a>
				<a href="home.php" class="btn btn-success" >Salir</a>
            </div>
	</form>		
</div>	
<div class="tbcenter">
	<form id="form2" name="form2" method="GET" action="" onSubmit="return confirm('¿Desea eliminar?')">
		<table width="700" class="table table-striped">
			<tr>
				<th>Codigo</th>
				<th>Labor</th>
				<th>Tipo</th>
				<th>Duracion</th>
				<th>Direccion</th>
				<th>Esta Activo</th>
				<th>Editar</th>
			</tr>
			<?php
				$dato = $ins -> selneg1($id);
				for($i=0;$i<count($dato);$i++) {
			?>
			<tr>
				<td><?php echo $dato[$i]["codnegper"]; ?></td>
				<td><?php echo $dato[$i]["labneg"]; ?></td>
				<td><?php echo $dato[$i]["tipneg"]; ?></td>
				<td><?php echo $dato[$i]["durneg"]; ?></td>
				<td><?php echo $dato[$i]["dirneg"]; ?></td>
				<td><?php echo $dato[$i]["negactper"]; ?></td>
				<td><a href="home.php?var=19&id=<?php echo $dato1[0]['idpersona'] ?>&cod=<?php echo $dato[$i]["codnegper"]; ?>" class="btn btn-success">Editar</a></td>
			</tr>
			<?php } ?>
		</table>
		
	</form>
</div>	