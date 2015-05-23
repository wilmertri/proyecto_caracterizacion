<?php
	include("controlador/ctbzona.php");
?>
<h1>Insertar Zona </h1>
<div class="forms">
    <form name="form1" action="" method="post">
        <div class="row">
            <div class="form-group">
                <label for="Nombre de la Zona">Nombre </label>
                <input name="nomzona" type="text" class="form-control">
            </div>
			<div class="form-group">
                <label for="Descripcion de la Zona ">Descripción</label>
                <input name="deszona" type="text" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Insertar">
                <a href="home.php" class="btn btn-primary" >Salir</a>
            </div>
        </div>
    </form>
	</div>
<div class="tbcenter">
	<form id="form2" name="form2" method="GET" action="" onSubmit="return confirm('¿Desea eliminar?')">
		<table width="700px" class="table table-striped">
        <tr>
			<th>Codigo </th>
            <th>Nombre<input name="pac" type="hidden" id="pac" value="104" /></th>
            <th>Descripción </th>
            <th>Editar</th>
        </tr>
			
			
	<?php
		$dato= $ins->selzona();
		for($i=0;$i<count($dato);$i++)
			{
	?>
		<tr>
			<td><?php echo $dato[$i]['codzona']?></td>
		    <td><?php echo $dato[$i]['nomzona']?></td>
            <td><?php echo $dato[$i]['deszona'] ?></td>
            <td><a href="home.php?id=<?php echo $dato[$i]['codzona'] ?>&var=27" class="btn btn-primary">Editar</a></td>
        </tr>
		
	<?php } ?>		
		</table>
	</form>
</div>