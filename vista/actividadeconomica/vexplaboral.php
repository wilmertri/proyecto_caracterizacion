<?php
	include ("controlador/cexplaboral.php");
?>
<h1> Ingresar Experiencia Laboral </h1>
<div class="forms">
	<form name="form1" method="POST" action="">
		<div class="row">
			<div class="form-group">
                <label for="Labor de la experiencia">Labor que desempeño</label>
                <input name="labexp" type="text" class="form-control">
            </div>
			<div class="form-group">
                <label for="Descripcion de la experiencia">Descripcion de la labor</label>
                <input name="desexp" type="text" class="form-control">
            </div>	
			
			<div class="form-group">
                <label for="Ingreso de la experiencia">Ingreso de la labor</label>
                <input name="ingexp" type="text" class="form-control">
            </div>
			
			<div class="form-group">
                <input type="submit" class="btn btn-success" value="Enviar">
				<a href="home.php?var=91&id=<?php echo $id ?>" class="btn btn-success">Volver</a>
				<a href="home.php" class="btn btn-success" >Salir</a>
            </div>
		</div>
	</form>
</div>	
<div class="tbcenter">
	<form id="form2" name="form2" method="GET" action="" onSubmit="return confirm('¿Desea eliminar?')">
		<table width="700px" class="table table-striped">
			<th align = "center">Codigo</th>
			<th align = "center">Labor de la experiencia</th>
			<th align = "center">Descripcion de la experiencia</th>
			<th align = "center">Ingreso de la experiencia</th>
			<th align = "center">Editar</th>
		</tr>
		<?php
			$dato = $ins -> selexpper2($id);
			for($i=0;$i<count($dato);$i++) {
		?>
		<tr>
			<td align = "left"><?php echo $dato[$i]["codexplab"]; ?></td>
			<td align = "center"><?php echo $dato[$i]["labexp"]; ?></td>
			<td align = "left"><?php echo $dato[$i]["desexp"]; ?></td>
			<td align = "right">$ <?php echo $dato[$i]["ingexp"]; ?></td>
			<td><a href="home.php?var=15&id=<?php echo $dato1[0]['idpersona'] ?>&cod=<?php echo $dato[$i]["codexplab"]; ?>" class="btn btn-success">Editar</a></td>
		</tr>
			<?php } ?>		
		</table>
	</form>
</div>
