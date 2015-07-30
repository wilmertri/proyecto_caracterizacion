<?php
	include("controlador/ctbeps.php");
?>
<h1>Insertar EPS </h1>
<div class="forms">
    <form name="form1" action="" method="post">
        <div class="row">
            <div class="form-group">
                <label for="Nombre de la EPS ">Nombre de la EPS</label>
                <input name="nomeps" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="Telefono EPS ">Telefono de la EPS</label>
                <input name="teleps" type="text" class="form-control">
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
			<th>Codigo</th>
            <th>Nombre de la EPS </th>
            <th>Telefono de la EPS </th>
            <th>Editar</th>
        </tr>		
	<?php
		$dato= $ins->seleps();
		for($i=0;$i<count($dato);$i++)
			{
	?>
		<tr>
			<td><?php echo $dato[$i]["codeps"]; ?></td>
		    <td><?php echo $dato[$i]['nomeps']?></td>
            <td><?php echo $dato[$i]['teleps'] ?></td>
            <td><a href="home.php?id=<?php echo $dato[$i]['codeps'] ?>&var=13" class="btn btn-success">Editar</a></td>
        </tr>
	<?php } ?>		
		</table>
	</form>
</div>
	
	
	
	
	