<?php
	include ("controlador/cingreso.php");
?>
<h1> Ingresos </h1>
<div class="forms">
	<form name="form1" method="POST" action="">
		<div class="row">
			<div class="form-group">
                <label for="Required"><i>(<span style="color:red;">*</span>)Campos obligatorios</i></label>
            </div>
			<div class="form-group">
                <label for="Tipo ingreso">Tipo ingreso <span style="color:red;">*</span></label>
                <select name="tipoing" class="form-control">
					<option value = 0> Seleccione una opción </option>
					<?php 
						for ($i=0; $i < count($tipoing1); $i++){
					?>
					<option value ="<?php echo $tipoing1[$i]['codval'] ?>" ><?php echo $tipoing1[$i]['nomval'] ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
			<div class="form-group">
                <label for="ingreso">ingreso <span style="color:red;">*</span></label>
                <input name="ing" type="text" class="form-control" placeholder="ej: 680000" pattern="[0-9]{1,10}" required>
            </div>	
			<div class="form-group">
                <input type="submit" class="btn btn-success" value="Enviar">
				<a href="home.php?var=91&id=<?php echo $id?>" class="btn btn-success">Volver</a>
				<a href="home.php" class="btn btn-success" >Salir</a>
            </div>
		</div>
	</form>
</div>	
<div class="tbcenter">
	<form id="form2" name="form2" method="GET" action="" onSubmit="return confirm('¿Desea eliminar?')">
		<table width="700px" class="table table-striped">
			<th align = "center">Codigo</th>
			<th align = "center">Tipo ingreso</th>
			<th align = "center">ingreso</th>
			<th align = "center">Editar</th>
		</tr>
		<?php
			$dato = $ins -> selingreso2($id);
			for($i=0;$i<count($dato);$i++) {
				$tiping2 = $ins->get_valor($dato[$i]["tipoing"]);
		?>
		<tr>
			<td align = "left"><?php echo $dato[$i]["coding"]; ?></td>
			<td align = "center"><?php echo $dato[$i]["tipoing"]; ?></td>
			<td align = "left">$ <?php echo $dato[$i]["ing"]; ?></td>
			<td><a href="home.php?var=93&id=<?php echo $dato1[0]['idpersona'] ?>&cod=<?php echo $dato[$i]["coding"]; ?>" class="btn btn-success">Editar</a></td>
		</tr>
			<?php } ?>		
		</table>
	</form>
</div>
