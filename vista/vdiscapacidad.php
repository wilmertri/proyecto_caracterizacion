<?php
	include ("controlador/cdiscapacidad.php");
	//include ("controlador/cclasediscapacidad.php");
?>
<h1>Insertar Discapacidad</h1>
<div class="forms">
	<form name="form1" action="" method="post">
		<div class="row">
			<div class="form-group">
                <label for="Tipo de discapacidad">Tipo de discapacidad</label>
                <input name="tipodis" type="text" class="form-control">
            </div>
			<div class="form-group">
                <input type="submit" class="btn btn-success" value="Insertar">
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
				<th>Editar</th>
			</tr>
			<?php 
			//Select
				$dato = $ins -> seldisper();
				for ($i=0; $i < count($dato); $i++){
			?>
			<tr>
				<td><?php echo $dato[$i]['idtipodis']?></td>
				<td><?php echo $dato[$i]['nomtipodis'] ?></td>
				<td><a href="home.php?id=<?php echo $dato[$i]['idtipodis'] ?>&var=33" class="btn btn-success">Editar</a></td>
			</tr>
			<?php  }  ?>
		</table>
	</form>
</div>