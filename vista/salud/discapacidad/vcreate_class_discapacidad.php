<?php
	include ("controlador/cclasediscapacidad.php");
?>
<h1>Agregar Clase de Discapacidad</h1>
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
                	<option value="">Seleccione el tipo de discapacidad</option>
				<?php 
					for ($i=0; $i<count($tipodis); $i++){
				?>
				<option value ="<?= $tipodis[$i]['idtipodis']; ?>" ><?= $tipodis[$i]['nomtipodis'] ?></option>
				<?php 
					} 
				?>
				</select>
			</div>
			<div class="form-group">
                <input type="submit" class="btn btn-success" value="Enviar">
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
				<td><?= $dato[$i]['id']?></td>
				<td><?= name_class_disc($tipodis, $dato[$i]['tipe_dis']) ?></td>
				<td><?= $dato[$i]['name'] ?></td>
				<td><a href="home.php?id=<?= $dato[$i]['id'] ?>&var=35" class="btn btn-success">Editar</a></td>
			</tr>
			<?php  }  ?>
		</table>
	</form>
</div>