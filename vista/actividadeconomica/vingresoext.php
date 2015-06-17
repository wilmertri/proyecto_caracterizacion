<?php
	include ("controlador/cingresoext.php");
?>
<h1> Ingresar Ingreso Externo </h1>
<div class="forms">
	<form name="form1" method="POST" action="">
		<div class="row">
			<div class="form-group">
                <label for="Required"><i>(<span style="color:red;">*</span>)Campos obligatorios</i></label>
            </div>
			<div class="form-group">
				<label for="tipo de ingreso">Tipo de ingreso externo <span style="color:red;">*</span></label>
                <select name="tipodeingreso" class="form-control">
				<option value=0> Seleccione una opcion </option>
					<?php 
						for ($i=0; $i < count($tipoingreso); $i++){
					?>
					<option value ="<?php echo $tipoingreso[$i]['idtipoingreso'] ?>" ><?php echo $tipoingreso[$i]['tipoingreso'] ?></option>
					<?php 
						} 
					?>
				</select>
			</div>
			<div class="form-group">
				<label for="ingreso en dinero">Ingreso en dinero <span style="color:red;">*</span></label>
				<input class="form-control" type="text" name="ingresoendinero" placeholder="ej: 680000" pattern="[0-9]{1,10}" required>
			</div>
			<div class="form-group">
				<label for="Descripcion de ingreso">Descripcion de ingreso <span style="color:red;">*</span></label>
				<input class="form-control" type="text" name="descdeldinero" placeholder="Escriba aqui una descripcion" maxlength="50" required>
			</div>
		</div>
		<div class="row">
			<div class="form-group">
				<input type="submit" class="btn btn-success" value="Enviar">
				<a href="home.php?var=91&id=<?php echo $id?>" class="btn btn-success">Volver</a>
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
				<th align = "center">Tipo de ingreso externo</th>
				<th align = "center">Ingreso en dinero</th>
				<th align = "center">Descripcion de ingreso</th>
				<th align = "center">Editar</th>
			</tr>
			<?php
				$dato = $ins->selingext2($id);
				for($i=0;$i<count($dato);$i++) {
					$tipoingreso2 = $ins->seltip1($dato[$i]["tipingext"]);
			?>
			<tr>
				<td align = "left"><?php echo $dato[$i]["codingext"]; ?></td>
				<td align = "left"><?php echo $tipoingreso2[0]["tipoingreso"]; ?></td>
				<td align = "left"><?php echo "$ ".$dato[$i]["ingext"]; ?></td>
				<td align = "left"><?php echo $dato[$i]["desingext"]; ?></td>
				<td align = "center"><a href ="home.php?var=17&id=<?php echo $dato1[0]['idpersona'] ?>&cod=<?php echo $dato[$i]["codingext"]; ?>" class="btn btn-success">Editar</a></td>
			</tr>
			<?php } ?>
		</table>
	</form>
</div>

