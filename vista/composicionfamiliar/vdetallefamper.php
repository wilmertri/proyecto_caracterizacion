<?php
	include ("controlador/cverdatosfam.php");
?>
<div class="forms1">	
	<h1>Detalle Datos de los Familires </h1>
	<table class="table" cellspacing="0" width="100%">
		<tr>
			<td>Documento:</td>
			<td><?= $numdocfam; ?></td>
		</tr>
		<tr>
			<td> Primer Nombre: </td>
			<td><?= $pnomfam; ?></td>
		</tr>
		<tr>
			<td> Segundo Nombre: </label> </td>
			<td> <?= $snomfam; ?></td>
		</tr>
		<tr>
			<td> Primer Apellido: </td>
			<td><?= $papefam; ?></td>
		</tr>
		<tr>
			<td> Segundo Apellido:</td>
			<td><?= $sapefam; ?></td>
		</tr>
		<tr>
			<td> Fecha de Nacimiento:</td>
			<td><?= $fechanac; ?></td>
		</tr>
		<tr>
			<td> Genero: </td>
			<td> <?= $genfam; ?></td>	
		</tr>
		<tr>
			<td> Gestante o Lactante: </td>
			<td> <?= $geslanfam; ?></td>	
		</tr>
		<tr>
			<td> Nivel de Escolaridad: </td>
			<td> <?= $nivescfam; ?></td>	
		</tr>
		<tr>
			<td> Ultimo Grado Cursado: </td>
			<td><?= $ultgracurfam; ?></td>
		</tr>
		<tr>
			<td> Ocupacion: </td>
			<td><?= $ocupacionActual; ?></td>
		</tr>
		<tr>
			<td> Grupo poblacional: </td>
			<td> <?= $etnia; ?></td>	
		</tr>
		<tr>
			<td> Parentesco:</td>
			<td> <?= $parentesco; ?></td>	
		</tr>
		<tr>
			<td align = "center">
				<a href ="home.php?var=7&id=<?= $dato1[0]["numdocfam"]; ?>" class="btn btn-success">Editar</a>
				<a href="home.php?id=<?= $id ?>&var=70" class="btn btn-success">Volver</a>
			</td>

			<td align = "center"><a href ="home.php?var=36&famper=1&id=<?= $dato1[0]["numdocfam"]; ?>" class="btn btn-success">Discapacidad</a></td>
		</tr>
	</table>
</div>	
