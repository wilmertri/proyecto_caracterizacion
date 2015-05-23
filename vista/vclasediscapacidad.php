<?php
	include ("controlador/cclasediscapacidad.php");
?>
<h1>Crear discapacidad</h1>
<div class="forms">
	<form name="form1" action="" method="post">
		<div class="row">
			<div class="form-group">
				<label for="Clase de discapacidad">Clase de discapacidad</label>
                <input name="nomcladis" type="text" class="form-control">
			</div>
			<div class="form-group">
				<label for="Clase de discapacidad">Tipo de Discapacidad</label>
                <select name="tipodis" type="text" class="form-control">
				<?php 
					for ($i=0; $i<count($tipodis); $i++){
				?>
				<option value ="<?php echo $tipodis[$i]['idtipodis']; ?>" ><?php echo $tipodis[$i]['nomtipodis'] ?></option>
				<?php 
					} 
				?>
				</select>
			</div>
			<div class="form-group">
                <input type="submit" class="btn btn-primary" value="Insertar">
                <a href="home.php" class="btn btn-primary" >Salir</a>
            </div>
		</div>
    </form>
</div>
<div class="tbcenter">
	<form id="form2" name="form2" method="GET" action="" onSubmit="return confirm('¿Desea eliminar?')">
		<table width="700px" class="table table-striped">
			<tr>
				<th>Codigo</th>
				<th>Tipo de discapacidad</th>
				<th>Clase de discapacidad</th>
				<th>Editar</th>
			</tr>
			<?php 
			//Select
			$dato = $ins -> selcladis();
				for ($i=0; $i < count($dato); $i++){
			?>
			<tr>
				<td><?php echo $dato[$i]['idclase']?></td>
				<td><?php echo $dato[$i]['idtipodis'] ?></td>
				<td><?php echo $dato[$i]['nomclasedis']?></td>
				<td><a href="home.php?id=<?php echo $dato[$i]['idclase'] ?>&var=35" class="btn btn-primary">Editar</a></td>
			</tr>
			<?php  }  ?>
		</table>
	</form>
</div>