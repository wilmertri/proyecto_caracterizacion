<?php
	include ("controlador/cdetalleper.php");
?>
<h1>Detalle Datos de la Persona</h1>

	<table class="table">
		<tr>
			<th>Número de Ficha:</th>
			<td><?= $Ficha ?></td>
		</tr>
		<tr>
			<th>Tipo Documento:</th>
			<td><?= $TipDoc ?></td>
			<th>Numero de documento:</th>
			<td><?= $Doc ?></td>
		</tr>
		<tr>
			<th>Lugar de Expedición:</th>
			<td><?= $ExpDoc ?></td>
			<th>Genero:</th>
			<td><?= $Genero ?></td>
		</tr>
		<tr>
			<th>Primer Nombre:</th>
			<td><?= $PrimerNom ?></td>
			<th>Segundo Nombre:</th>
			<td><?= $SegundoNom ?></td>
		</tr>
		<tr>
			<th>Primer Apellido:</th>
			<td><?= $PrimerApe ?></td>
			<th>Segundo Apellido:</th>
			<td><?= $SegundoApe ?></td>
		</tr>
		<tr>
			<th>Estado Civil:</th>
			<td><?= $EstadoCiv ?></td>
			<th>Gestante o Lactante:</th>
			<td><?= $Gestante ?></td>
		</tr>
		<tr>
			<th>Direccion:</th>
			<td><?= $Direccion ?></td>
			<th>Zona:</th>
			<td><?= $Zona ?></td>
		</tr>
		<tr>
			<th>Vereda:</th>
			<td><?= $Vereda ?></td>
			<th>Sector:</th>
			<td><?= $Sector ?></td>
		</tr>
		<tr>
			<th>Barrio o Finca:</th>
			<td><?= $BarrioFinca ?></td>
			<th>Telefono:</th>
			<td><?= $Telefono ?></td>
		</tr>
		<tr>
			<th>Telefono 2:</th>
			<td><?= $SegundoTel ?></td>
			<th>Lugar de Nacimiento:</th>
			<td><?= $LugarNac ?></td>
		</tr>
		<tr>
			<th>Fecha de Nacimiento:</th>
			<td><?= $FechaNac ?></td>
			<th>Edad:</th>
			<td><?= $edad ?> Años</td>
		</tr>
		<tr>
			<th>Grupo Poblacional:</th>
			<td><?= $Etnia ?></td>
			<th>Hijos a Cargo:</th>
			<td><?= $HijosCargo ?></td>
		</tr>
		<tr>
			<th>Relaciones Sexuales:</th>
			<td><?= $Relaciones ?></td>
			<th>Libreta Militar:</th>
			<td><?= $Libreta ?></td>
		</tr>
		<tr>
			<th>Tramite Libreta Militar:</th>
			<td><?= $TramiteLibreta ?></td>
		</tr>
	</table>
<div>
<div class="row">
    <div class="col-md-12">
            <a href="javascript:history.back();" class="btn btn-success">Volver</a>
			<a href="home.php?id=<?php echo $dato1[0]['idpersona'] ?>&var=5" class="btn btn-success">Editar</a>
			<a href="home.php" class="btn btn-success" >Salir</a>
	</div>
</div>
</div>