<?php
	include("controlador/ctbvereda.php");
?>
<h1>Insertar Vereda </h1>
<div class="forms">
    <form name="form1" action="" method="post">
        <div class="row">
            <div class="form-group">
                <label for="Nombre de la Vereda ">Nombre </label>
                <input name="nomver" type="text" class="form-control">
            </div>
			<div class="form-group">
                <label for="Descripcion de la Vereda ">Descripción de la ubicación</label>
                <input name="desubver" type="text" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Insertar">
                <a href="home.php" class="btn btn-success" >Salir</a>
            </div>
        </div>
    </form>
	</div>
<div class="tbcenter">
	<form id="form2" name="form2" method="GET" action="" onSubmit="return confirm('¿Desea eliminar?')">
		<table width="700px" class="table table-striped">
        <tr>
			<th>Codigo </th>
            <th>Nombre </th>
            <th>Descripción de la ubicación</th>
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
            <td><a href="home.php?id=<?php echo $dato[$i]['codver'] ?>&var=25" class="btn btn-success">Editar</a></td>
        </tr>
		
	<?php } ?>		
		</table>
	</form>
</div>