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
				<td><?= $dato[$i]['idtipodis']?></td>
				<td><?= $dato[$i]['nomtipodis'] ?></td>
				<td><a href="home.php?id=<?= $dato[$i]['idtipodis'] ?>&var=33" class="btn btn-success">Editar</a></td>
			</tr>
			<?php  }  ?>
		</table>
	</form>
</div>