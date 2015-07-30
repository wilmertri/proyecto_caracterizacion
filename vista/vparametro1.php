<?php
	include("controlador/cparametro.php");
?>
<h1>Actualizar Parametro </h1>
<div class="forms">
    <form name="form1" action="home.php?var=40" method="post">
        <div class="row">
            <div class="form-group">
                <label for="Nombre del Parametro">Codigo</label>
                <input name="codpar" type="text" value = "<?php echo $dat5[0]['codpar'] ?>" class="form-control" disabled>
                <input type="hidden" name="actu" value="actu" />
                <input type="hidden" name="codpar" value="<?php echo $dat5[0]['codpar'] ?>" />
            </div>
            <div class="form-group">
                <label for="Nombre del Parametro">Nombre del Parametro</label>
                <input name="nompar" type="text" value = "<?php echo $dat5[0]['nompar'] ?>"  class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Actualizar">
            </div>
        </div>
    </form>
</div>
<div class="tbcenter">
	<form id="form2" name="form2" method="GET" action="" onSubmit="return confirm('�Desea eliminar?')">
		<table width="700px" class="table table-striped">
        <tr>
			<th>Codigo<input name="pac" type="hidden" id="pac" value="104" /></th>
            <th>Nombre del Parametro</th>
            <th>Editar</th>
        </tr>
						
	<?php
		$dato= $ins->selpar();
		for($i=0;$i<count($dato);$i++)
			{
	?>
	<tr>
			<td><?php echo $dato[$i]['codpar']?></td>
		    <td><?php echo $dato[$i]['nompar']?></td>
            <td><a href="home.php?id=<?php echo $dato[$i]['codpar'] ?>&var=25" class="btn btn-success">Editar</a></td>
        </tr>
		
	
	<?php } ?>		
		</table>
	</form>
</div>