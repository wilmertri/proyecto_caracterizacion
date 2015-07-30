<?php
 	include ("controlador/cparametro.php");
?>
<h1>Insertar Parametro</h1>
<div class="forms">
    <form name="form1" action="" method="post">
        <div class="row">
            <div class="form-group">
                <label for="Nombre de Parametro">Nombre de Parametro</label>
                <input name="nompar" type="text" class="form-control">
            </div>
			<div class="form-group">
                <input type="submit" class="btn btn-success" value="Insertar">
            </div>
        </div>
    </form>
</div>
<div class="tbcenter">
	<table id="example" class="display" cellspacing="0" width="100%">
		<thead>
	        <tr>
				<th>Cod. Parametro </th>
	            <th>Nombre del Parametro </th>
	            <th>Editar</th>
	        </tr>			
		</thead>
		<tfoot>
	        <tr>
				<th>Cod. Parametro </th>
	            <th>Nombre del Parametro </th>
	            <th>Editar</th>
	        </tr>			
		</tfoot>
		<tbody>
	<?php
		$dato = $ins->selpar();
		for($i=0;$i<count($dato);$i++)
			{
	?>
		<tr>
			<td><?php echo $dato[$i]['codpar']?></td>
		    <td><?php echo $dato[$i]['nompar']?></td>
            <td><a href="home.php?id=<?php echo $dato[$i]['codpar'] ?>&var=41" class="btn btn-success">Editar</a></td>
        </tr>
		
	<?php } ?>
		</tbody>		
	</table>
</div>
