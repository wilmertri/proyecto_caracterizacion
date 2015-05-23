<?php
	include("controlador/cconsultatbsalud.php");  
?>
<div class="forms1">
	<h1>Datos Salud</h1>
	<table class="table">
		<tr>
			<th>Afiliacion Salud:</th>
			<td><?= $afiliacionsalud ?></td>
		</tr>
		<tr>
			<th>EPS Registrada:</th>
			<td><?= $epsper ?></td>
		</tr>
		<tr>
			<th>Se ha negado la Atencion:</th>
			<td><?= $negserper ?></td>
		</tr>
		<tr>
			<th>Solicitud Atencion Medica:</th>
			<td><?= $atesalposvicper ?></td>
		</tr>
		<tr>
			<th>Esquema de Vacunacion:</th>
			<td><?= $esqvacper ?></td>
		</tr>
		<tr>
			<th>Control Odontologico:</th>
			<td><?= $conodoper ?></td>
		</tr>
		<tr>
			<th>Disacapacidad Conflicto Armado:</th>
			<td><?= $disconfarm ?></td>
		</tr>
		<tr>
			<th>Alimentos Diarios:</th>
			<td><?= $comdiaper ?></td>
		</tr>

	</table>
	<table class="table">	
		<tr>
			<td><a href="home.php?pr=<?= $id ?>&var=70" class="btn btn-success">Volver</a></td>
			<td><a href="home.php?var=34&id=<?php echo $id;?>" class="btn btn-success">Discapacidad</a></td>
			<td><a href="home.php?var=57&id=<?php echo $id;?>" class="btn btn-success">Rehabilitacion</a></td>
		</tr>
	</table>
</div>
