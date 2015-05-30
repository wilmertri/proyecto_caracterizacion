<?php
	include ("controlador/cprofesion.php");
?>
<h1>Actualizar Datos Profesion</h1>
<div class="forms">
    <form name="form1" action="home.php?var=104" method="post">
		<div class="row">
            <div class="form-group">
				<label for="Codigo profesion">ID</label>
                <input name="idprofesion" type="text" value = "<?php echo $dato1[0]['idprofesion'] ?>" class="form-control" disabled>
				<input type="hidden" name="actu" value="actu" />
				<input type="hidden" name="idprofesion" value="<?php echo $dato1[0]['idprofesion'] ?>" />
			</div>
			<div class="form-group">
                <label for="Nombre Profesion">Profesión </label>
                <input name="nombreprof" type="text" class="form-control">
			</div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Actualizar">
				<a href="home.php?var=104" class="btn btn-success">Volver</a>
				<a href="home.php" class="btn btn-success" >Salir</a>
            </div>
		</div>
	</form>
</div>
<div class="tbcenter">
	<form id="form2" name="form2" method="GET" action="" >
		<table width="700px" class="table table-striped">
        <tr>
			<th>ID </th>
            <th>Nombre</th>
            <th>Editar</th>
        </tr>
	<?php
		$dato= $ins->selprof();
		for($i=0;$i<count($dato);$i++)
			{
	?>
		<tr>
			<td><?php echo $dato[$i]['idprofesion']?></td>
		    <td><?php echo $dato[$i]['nombreprof']?></td>
            <td><a href="home.php?id=<?php echo $dato[$i]['idprofesion'] ?>&var=105" class="btn btn-success">Editar</a></td>
        </tr>
	<?php } ?>		
		</table>
	</form>
</div>
		