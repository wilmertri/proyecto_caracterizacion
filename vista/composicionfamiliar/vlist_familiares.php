<?php
	include ("controlador/cverdatosfam.php");
?>
<div class="forms1">	
	<h1>Lista de familiares de la persona </h1>
	<table class="table">
		<tr>
			<th>Número de documento</th>
			<th>Nombre</th>
			<th>Edad</th>
			<th>Ocupación</th>
			<th>Detalle</th>
		</tr>
		<?php for($i=0 ; $i < count($familiares) ; $i++): ?>
			<tr>
				<td><?= $familiares[0]['numdocfam'] ?></td>
				<td><?= getNombre($familiares); ?></td>
				<td><?= $datosfamper->calcular_edad($familiares[0]['fecnacfam']);  ?></td>
				<td><?= getValorFam($familiares[0]['ocuactfam'], $datosfamper); ?></td>
				<td>
					<a href="home.php?id=<?= $id; ?>&var=8&idf=<?= $familiares[0]['idfamiliaper'] ?>" class="btn btn-primary">Datos</a>
				</td>
			</tr>
		<?php endfor; ?>
	</table>
	<a href="home.php?id=<?= $id ?>&var=70" class="btn btn-success">Volver</a>
</div>	
