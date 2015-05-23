<?php
	include("controlador/ctbcapacitacion.php");
?>
<h1>Ingresar Capacitacion </h1>
<div class="forms">
    <form name="form1" action="" method="post">
        <div class="row">
            <div class="form-group">
                <label for="Nombre de la Capacitación ">Nombre de la Capacitación </label>
                <input name="nomcap" type="text" class="form-control">
            </div>
			<div class="form-group">
                <label for="Entidad donde recibio la Capacitación ">Entidad donde recibió la Capacitación </label>
                <input name="entcap" type="text" class="form-control">
            </div>
			<div class="form-group">
                <label for="Titulo obtenido de la Capacitación ">Título Obtenido</label>
                <input name="titcap" type="text" class="form-control">
            </div>
			<div class="form-group">
                <label for="Le gustaria capacitarse ">Le gustaria capacitarse</label>
                <input name="opicaper" type="text" value = "<?php echo $dato2[0]['opicaper'] ?>" class="form-control">
            </div>
			
			<div class="form-group">
                <label for="En que le gustaria capacitarse">En que le gustaria capacitarse </label>
                <input name="newopicaper" type="text" value = "<?php echo $dato2[0]['newopicaper'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Enviar">
				<a href="home.php" class="btn btn-primary" >Salir</a>
				<a href="home.php?var=56&id=<?php echo $dato1[0]['numdocper'] ?>" class="btn btn-primary">Volver</a>
            </div>
        </div>
    </form>
	</div>
<div class="tbcenter">
	<form id="form2" name="form2" method="GET" action="" onSubmit="return confirm('¿Desea eliminar?')">
		<table width="700px" class="table table-striped">
        <tr>
			<th>Código</th>
            <th>Nombre de la Capacitación </th>
            <th>Entidad donde recibió la Capacitación </th>
            <th>Título Obtenido</th>
			<th>Le gustaria capacitarse</th>
			<th>En que le gustaria capacitarse</th>
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
			<td><?php echo $dato[$i]['opicaper'] ?></td>
			<td><?php echo $dato[$i]['newopicaper'] ?></td>
            <td><a href="home.php?var=11&id=<?php echo $dato1[0]['numdocper'] ?>&cod=<?php echo $dato[$i]["codcapper"]; ?>" class="btn btn-primary">Editar</a></td>
            
		</tr>
	<?php } ?>		
		</table>
	</form>
</div>


