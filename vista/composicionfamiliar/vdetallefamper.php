<?php
	include ("controlador/cdatosfam.php");
?>
<div class="forms1">	
	<h1>Detalle Datos de los Familires </h1>
	<table class="table" cellspacing="0" width="100%">
		<tr>
			<td>Documento:</td>
			<td><?php echo $dato1[0]['numdocfam']; ?></td>
		</tr>
		<tr>
			<td> Primer Nombre: </td>
			<td><?php echo $dato1[0]['pnomfam']; ?></td>
		</tr>
		<tr>
			<td> Segundo Nombre: </label> </td>
			<td> <?php echo $dato1[0]['snomfam'] ?></td>
		</tr>
		<tr>
			<td> Primer Apellido: </td>
			<td><?php echo $dato1[0]['papefam'] ?></td>
		</tr>
		<tr>
			<td> Segundo Apellido:</td>
			<td><?php echo $dato1[0]['sapefam'] ?></td>
		</tr>
		<tr>
			<td> Fecha de Nacimiento:</td>
			<td><?php echo $dato1[0]['fecnacfam'] ?></td>
		</tr>
		<tr>
			<td> Genero: </td>
				<?php
					$gen = $ins->valor2($dato1[0]["genfam"]);
				?>
			<td> <?php echo $gen[0]['nomval'] ?></td>	
		</tr>
		<tr>
			<td> Gestante o Lactante: </td>
				<?php
					$gest = $ins->valor2($dato1[0]["geslanfam"]);
				?>
			<td> <?php echo $gest[0]['nomval'] ?></td>	
		</tr>
		<tr>
			<td> Nivel de Escolaridad: </td>
				<?php
					$nesc = $ins->valor2($dato1[0]["nivescfam"]);
				?>
			<td> <?php echo $nesc[0]['nomval'] ?></td>	
		</tr>
		<tr>
			<td> Ultimo Grado Cursado: </td>
			<td><?php echo $dato1[0]['ultgracurfam'] ?></td>
		</tr>
		<tr>
			<td> Ocupacion: </td>
			<td><?php echo $dato1[0]['ocuactfam'] ?></td>
		</tr>
		<tr>
			<td> Etnia: </td>
				<?php
					$etn2 = $ins->valor2($dato1[0]["etniaper"]);
				?>
			<td> <?php echo $etn2[0]['nomval'] ?></td>	
		</tr>
		<tr>
			<td> Parentesco:</td>
			<?php
					$parent = $ins->valor2($dato1[0]["parperfam"]);
				?>
			<td> <?php echo $parent[0]['nomval'] ?></td>	
		</tr>
		<tr>
			<td align = "center"><a href ="home.php?var=7&id=<?php echo $dato1[0]["numdocfam"]; ?>" class="btn btn-primary">Editar</a></td>
			<td align = "center"><a href ="home.php?var=36&famper=1&id=<?php echo $dato1[0]["numdocfam"]; ?>" class="btn btn-primary">Discapacidad</a></td>
		</tr>
	</table>
</div>	
