<?php
	include ("controlador/cverdatosfam.php");
?>
<div class="forms1">	
	<h1>Detalle Datos de los Familires </h1>
	<table class="table" cellspacing="0" width="100%">
		<tr>
			<td>Documento:</td>
			<td><strong><?= $numdocfam; ?></strong></td>
		</tr>
		<tr>
			<td> Primer Nombre: </td>
			<td><strong><?= $pnomfam; ?></strong></td>
		</tr>
		<tr>
			<td> Segundo Nombre: </label> </td>
			<td><strong> <?= $snomfam; ?></strong></td>
		</tr>
		<tr>
			<td> Primer Apellido: </td>
			<td><strong><?= $papefam; ?></strong></td>
		</tr>
		<tr>
			<td> Segundo Apellido:</td>
			<td><strong><?= $sapefam; ?></strong></td>
		</tr>
		<tr>
			<td> Fecha de Nacimiento:</td>
			<td><strong><?= $fechanac; ?> Años</strong></td>
		</tr>
		<tr>
			<td> Genero: </td>
			<td><strong> <?= $genfam; ?></strong></td>	
		</tr>
		<tr>
			<td> Gestante o Lactante: </td>
			<td><strong> <?= $geslanfam; ?></strong></td>	
		</tr>
		<tr>
			<td> Nivel de Escolaridad: </td>
			<td><strong> <?= $nivescfam; ?></strong></td>	
		</tr>
		<tr>
			<td> Ultimo Grado Cursado: </td>
			<td><strong><?= $ultgracurfam; ?></strong></td>
		</tr>
		<tr>
			<td> Ocupacion: </td>
			<td><strong><?= $ocupacionActual; ?></strong></td>
		</tr>
		<tr>
			<td> Grupo poblacional: </td>
			<td><strong> <?= $etnia; ?></strong></td>	
		</tr>
		<tr>
			<td> Parentesco:</td>
			<td><strong> <?= $parentesco; ?></strong></td>	
		</tr>
		<tr>
			<td align = "center">
				<a href ="home.php?var=7&idf=<?= $dato1[0]["idfamiliaper"]; ?>&id=<?= $id; ?>" class="btn btn-success">Editar</a>
				<a href="home.php?id=<?= $id ?>&var=120" class="btn btn-success">Volver</a>
			</td>
		</tr>
	</table>
</div>	
