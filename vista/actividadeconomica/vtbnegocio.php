<?php
	include ("controlador/ctbnegocio.php");
?>
<h1> Ingresar Negocio </h1>
<div class="forms">
	<form name="form1" method="POST" action="">
		<div class="row">
			<div class="form-group">
                <label for="Required"><i>(<span style="color:red;">*</span>)Campos obligatorios</i></label>
            </div>
			<div class="form-group">
				<label for="labneg">Labor del Negocio  <span style="color:red;">*</span></label>
				<input class="form-control" type="text" name="labneg"  placeholder="Descripcion del negocio" maxlength="50" required>
			</div>
			<div class="form-group">
				<label for="tipneg">Que Tipo de Negocio es?  <span style="color:red;">*</span></label>
				<input class="form-control" type="text" name="tipneg"  placeholder="ej: De servicios, de manufactura, etc" maxlength="50" required>
			</div>
			<div class="form-group">
				<label for="Duracion">Duracion  <span style="color:red;">*</span></label>
				<select name="durneg" class="form-control">
					<option value = 0> Seleccione una opción </option>
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
				<label for="direccion">Dirección  <span style="color:red;">*</span></label>
				<input class="form-control" type="text" name="dirneg" maxlength="30" required>
			</div>
			<div class="form-group">
				<label for="negactper">Esta activo el negocio?  <span style="color:red;">*</span></label>
				<select name="negactper" class="form-control">
					<option value = 0> Seleccione una opción </option>
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
		<div class="row">
			<div class="form-group">
                <input type="submit" class="btn btn-success" value="Enviar">
				<a href="home.php?var=91&id=<?= $id ?>" class="btn btn-success">Volver</a>
				<a href="home.php" class="btn btn-success" >Salir</a>
            </div>
		</div>
	</form>
</div>
<div class="tbcenter">
	<form id="form2" name="form2" method="GET" action="" onSubmit="return confirm('¿Desea eliminar?')">
		<table width="700px" class="table table-striped">
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
					$durneg2 = $ins->get_valor($dato[$i]["durneg"]);
					$negactper2 = $ins->get_valor($dato[$i]["negactper"]);
					//var_dump($durneg2);
			?>
			<tr>
				<td><?php echo $dato[$i]["codnegper"]; ?></td>
				<td><?php echo $dato[$i]["labneg"]; ?></td>
				<td><?php echo $dato[$i]["tipneg"]; ?></td>
				<td><?php echo $durneg2[0]["nomval"]; ?></td>
				<td><?php echo $dato[$i]["dirneg"]; ?></td>
				<td><?php echo $negactper2[0]["nomval"]; ?></td>
				<td><a href="home.php?var=19&id=<?php echo $dato1[0]['idpersona'] ?>&cod=<?php echo $dato[$i]["codnegper"]; ?>" class="btn btn-success">Editar</a></td>
			</tr>
			<?php } ?>
		</table>
		
	</form>
</div>