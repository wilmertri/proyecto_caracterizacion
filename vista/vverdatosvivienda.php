<?php
	include("controlador/cverdatosvivienda.php");  
?>
<div class="forms1">
	<h1>Datos de la vivienda</h1>
	<table class="table">
		<tr>
			<th>Tipo de vivienda</th>
			<td><?= $TipoVivienda ?></td>
		</tr>
		<tr>
			<th>Tipo de pisos</th>
			<td><?= $TipoPisos ?></td>
		</tr>
		<tr>
			<th>Tipo de paredes</th>
			<td><?= $TipoParedes ?></td>
		</tr>
		<tr>
			<th>Tipo de techos</th>
			<td><?= $TipoTechos ?></td>
		</tr>
		<tr>
			<th>Tipo de riesgo en la zona durante los ultimos 2 años</th>
			<td><?= $TipoRiesgo ?></td>
		</tr>
		<tr>
			<th>Cuartos en total que dispone este hogar incluyendo sala-comedor</th>
			<td><?= $CuartosTotales ?></td>
		</tr>
		<tr>
			<th>En cuántos de los cuartos anteriores duermen las personas del hogar</th>
			<td><?= $CuartosDondeDuermen ?></td>
		</tr>
		<tr>
			<th>Cantidad de personas que duermen normalmente en los cuartos</th>
			<td><?= $CantidadPersonasDuermen ?></td>
		</tr>
		<tr>
			<th>Estrato de la vivienda</th>
			<td><?= $Estrato ?></td>
		</tr>
		<tr>
			<th>Servicios basicos</th>
			<td>
				<?php
					if ($idserviciosbasicos) 
					{						
						for ($i=0; $i <count($serviciosbasicos) ; $i++) 
						{
							echo $serviciosbasicos[$i][0]["desservbas"]."<br>";
					  	}  
					}
					else
					{
						echo "Sin registro";
					}
				?>
			</td>
		</tr>
		<tr>
			<td><a href="javascript:history.back();" class="btn btn-success">Volver</a></td>
			<td></td>
		</tr>
	</table>
</div>
