<?php
	include("controlador/cdatoseducacion.php");  
?>
<div class="forms1">
	<h1>Datos Educacion</h1>
	<table class="table">
		<tr>
			<th>Nivel Educativo Alcanzado:</th>
			<td><?= $ultimoGrado ?></td>
		</tr>
		<tr>
			<th>Titulo Obtenido:</th>
			<td><?= $titulo ?></td>
		</tr>
		<tr>
			<th>¿Actualmente está matriculado(a)?:</th>
			<td><?= $matricula ?></td>
		</tr>
		<tr>
			<th>Razón principal por la que no asiste a la escuela, colegio o universidad:</th>
			<td><?= $noMatri ?></td>
		</tr>
		<tr>
			<th>¿terminó el año escolar anterior?:</th>
			<td><?= $terminoAño ?></td>
		</tr>
		
	</table>
	<table class="table center">	
		<tr>
			<td><a href="home.php?id=<?= $id ?>&var=70" class="btn btn-success">Volver</a></td>
			<td><a href="home.php?var=10&id=<?= $id ?>" class="btn btn-success">Capacitacion </a></td>
		</tr>
	</table>
</div>