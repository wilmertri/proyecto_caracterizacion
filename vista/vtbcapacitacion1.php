<?php
	include("controlador/ctbcapacitacion.php");
?>
<h1>Actualizar Datos Capacitación </h1>
<div class="forms">
    <form name="form1" action="home.php?var=10&id=<?php echo $dato1[0]['numdocper'] ?>" method="post">
        <div class="row">
			<div class="form-group">
                <label for="Codigo de la Capacitación ">Codigo</label>
                <input name="codcapper" type="text" value = "<?php echo $dato2[0]['codcapper'] ?>" class="form-control" disabled>
				<input type="hidden" name="actu" value="actu" />
				<input type="hidden" name="codcapper" value="<?php echo $dato2[0]['codcapper'] ?>" />
            </div>
            <div class="form-group">
                <label for="Nombre de la Capacitación ">Nombre de la Capacitación </label>
                <input name="nomcap" type="text" value = "<?php echo $dato2[0]['nomcap'] ?>" class="form-control">
            </div>
			<div class="form-group">
                <label for="Entidad donde recibio la Capacitación ">Entidad donde recibio la Capacitación </label>
                <input name="entcap" type="text" value = "<?php echo $dato2[0]['entcap'] ?>" class="form-control">
            </div>
			<div class="form-group">
                <label for="Titulo obtenido de la Capacitación ">Titulo obtenido de la Capacitación </label>
                <input name="titcap" type="text" value = "<?php echo $dato2[0]['titcap'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Actualizar">
				<a href="home.php" class="btn btn-primary" >Salir</a>
            </div>
        </div>
    </form>
	</div>
<div class="tbcenter">
	<form id="form2" name="form2" method="GET" action="" onSubmit="return confirm('¿Desea eliminar?')">
		<table width="700px" class="table table-striped">
        <tr>
			<th>Codigo</th>
            <th>Nombre de la Capacitación </th>
            <th>Entidad donde recibio la Capacitación </th>
            <th>Titulo obtenido de la Capacitación</th>
			<th>Editar</th>
        </tr>		
	<?php
		$dato= $ins->selcap1($id);
		for($i=0;$i<count($dato);$i++)
			{
	?>
		<tr>
			<td><?php echo $dato[$i]['codcapper']?></td>
			<td><?php echo $dato[$i]['nomcap']?></td>
		    <td><?php echo $dato[$i]['entcap']?></td>
            <td><?php echo $dato[$i]['titcap'] ?></td>
            <td><a href="home.php?var=11&id=<?php echo $dato1[0]['numdocper'] ?>&cod=<?php echo $dato[$i]["codcapper"]; ?>" class="btn btn-primary">Editar</a></td>
        </tr>
	<?php } ?>			
		</table>
	</form>
</div>