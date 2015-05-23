<?php
	include("controlador/ctbvereda.php");
?>
<h1>Actualizar Datos Vereda </h1>
<div class="forms">
    <form name="form1" action="home.php?var=24" method="post">
        <div class="row">
			<div class="form-group">
                <label for="Codigo de la Vereda ">Codigo</label>
                <input name="codver" type="text" value = "<?php echo $dato1[0]['codver'] ?>" class="form-control" disabled>
				<input type="hidden" name="actu" value="actu" />
				<input type="hidden" name="codver" value="<?php echo $dato1[0]['codver'] ?>" />
            </div>
            <div class="form-group">
                <label for="Nombre de la Vereda ">Nombre </label>
                <input name="nomver" type="text" value = "<?php echo $dato1[0]['nomver'] ?>"  class="form-control">
            </div>
			<div class="form-group">
                <label for="Descripcion de la Vereda ">Descripcion de la ubicacion</label>
                 <input name="desubver" type="text" value = "<?php echo $dato1[0]['desubver'] ?>"  class="form-control">
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
			<th>Codigo<input name="pac" type="hidden" id="pac" value="104" /></th>
            <th>Nombre </th>
            <th>Descripcion de la ubicacion</th>
            <th>Editar</th>
        </tr>
			
			
	<?php
		$dato= $ins->selver();
		for($i=0;$i<count($dato);$i++)
			{
	?>
	<tr>
			<td><?php echo $dato[$i]['codver']?></td>
		    <td><?php echo $dato[$i]['nomver']?></td>
            <td><?php echo $dato[$i]['desubver'] ?></td>
            <td><a href="home.php?id=<?php echo $dato[$i]['codver'] ?>&var=25" class="btn btn-primary">Editar</a></td>
        </tr>
		
	
	<?php } ?>		
		</table>
	</form>
</div>