<?php
	include ("controlador/ctbopcionnomatricula.php");
?>

<h1>Ingresar Opcion No Matricula</h1>
<div class="forms">
    <form name="form1" action="" method="post">
		<div class="row">
            <div class="form-group">
                <label for="Opcion">Razon Principal por la que no asiste a la escuela, colegio o universidad </label>
                <input name="opcion" type="text" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Enviar">
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
            <th>Opcion</th>
            <th>Editar</th>
        </tr>
	<?php
		$dato= $ins->selopcion();
		for($i=0;$i<count($dato);$i++)
			{
	?>
		<tr>
			<td><?php echo $dato[$i]['idtbopcionnomatricula']?></td>
		    <td><?php echo $dato[$i]['opcion']?></td>
            <td><a href="home.php?id=<?php echo $dato[$i]['idtbopcionnomatricula'] ?>&var=107" class="btn btn-success">Editar</a></td>
        </tr>
	<?php } ?>		
		</table>
	</form>
</div>
		