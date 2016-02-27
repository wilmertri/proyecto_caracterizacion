<?php
	include ("controlador/cverdespyaban.php");
?>
<h2>Datos de Despojo y Abandono de Tierras</h2>

<div class="forms1">
	
	<table class="table">
		<tr>
			<th>Lugar de Expulsion: </th>
			<td><?= $LugarExpulsion; ?></td>
		</tr>
		<tr>
			<th>Fecha de Expulsion: </th>
			<td><?= $FechaExpulsion; ?></td>
		</tr>
		<tr>
			<th>Tiempo de permanencia en el municipio: </th>
			<td><?= $TiempoPermanencia; ?> Años</td>
		</tr>
		<tr>
			<th>Después del hecho victimizante, ¿Algún actor armado le ha impedido salir de un territorio?</th>
			<td><?= $ActorArmado; ?></td>
		</tr>
		<tr>
			<th>Después del hecho victimizante, ¿algún actor armado ha impedido el ingreso de alimentos o bienes básicos a la zona donde ha estado habitando?</th>
			<td><?= $IngresoAlimentos; ?></td>
		</tr>
		<tr>
			<th>Solicitante de la inclusión en el RUPD/RUV</th>
			<td><?= $SolicitanteInclusion; ?></td>
		</tr>
		<tr>
			<th>Fue incluido en el RUPD / RUV por:</th>
			<td><?= $RazonInclusion; ?></td>
		</tr>
		<tr>
			<th>Usted o algún miembro del hogar tenía un predio que debido a la violencia causada por un grupo armado tuvo que:</th>
			<td><?= $PredioPerdido; ?></td>
		</tr>
		<tr>
			<th>Cantidad de bienes inmuebles perdidos: </th>
			<td><?= $NumeroPrediosPerdidos; ?></td>
		</tr>
		<tr>
			<th>El tipo de bien inmueble que abandonó es:</th>
			<td><?= $TipoPredioAbandono; ?></td>
		</tr>
		<tr>
			<th>Qué relación tiene con el bien que abandonó: </th>
			<td><?= $RelacionBienAbandono; ?></td>
		</tr>
		<tr>
			<th>Tipo de familia: </th>
			<td><?= $TipoFamilia; ?></td>
		</tr>
		<tr>
			<th>Ideal de la familia: </th>
			<td><?= $IdealFamilia; ?></td>
		</tr>
		<tr>
			<th>Lugar de Reubicacion </th>
			<td><?= $LugarReubicacion; ?></td>
		</tr>
		<tr>
			<th>La principal razón por la cual no se ha retornado o reubicado: </th>
			<td><?= $RazonNoRetorno; ?></td>
		</tr>
		<tr>
			<th>Ha solicitado medidas de protección: </th>
			<td><?= $MedidasProteccion; ?></td>
		</tr>
		<tr>
			<th>Recibió medidas de protección: </th>
			<td><?= $MedidasProteccionRecibidas; ?></td>
		</tr>
		<tr>
			<th>Recibió indemnización por parte de la unidad de victimas: </th>
			<td><?= $IndemnizacionUV; ?></td>
		</tr>
		<tr>
			<th class="text-center" colspan="2">Observaciones: </th>
		</tr>
		<tr>
			<td class="text-justify" colspan="2"><?= $Observaciones; ?></td>
		</tr>

		<tr>
			<td colspan="2"><a href="javascript:history.back();" class="btn btn-success">Volver</a></td>
		</tr>
	</table>	
       
</div>
