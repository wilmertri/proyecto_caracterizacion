<?php
	include("controlador/ctbcapacitacion.php");
?>
<h1>Ingresar Capacitacion </h1>
<div class="forms">
    <form name="form1" action="" method="post">
		<div class="row">
            <div class="form-group col-md-12">
                <label for="Required"><i>(<span style="color:red;">*</span>)Campos obligatorios</i></label>
            </div>
		</div>
        <div class="row">
            <div class="form-group">
                <label for="Nombre de la Capacitación ">Nombre de la Capacitación <span style="color:red;">*</span></label>
                <input name="nomcap" type="text" class="form-control" placeholder="ej: gestion financiera"  pattern="(?=.*[A-z ]).{2,50}" title= "Maximo 50 caracteres" required>
            </div>
			<div class="form-group">
                <label for="Entidad donde recibio la Capacitación ">Entidad donde recibió la Capacitación <span style="color:red;">*</span></label>
                <input name="entcap" type="text" class="form-control" placeholder="ej: ENID"  pattern="(?=.*[A-z ]).{2,50}" title= "Maximo 50 caracteres" required>
            </div>
			<div class="form-group">
                <label for="Titulo obtenido de la Capacitación ">Título Obtenido <span style="color:red;">*</span></label>
                <input name="titcapper" type="text" class="form-control" placeholder="ej: tecnico laboral en sistemas"  pattern="(?=.*[A-z ]).{2,50}" title= "Maximo 50 caracteres" required>
            </div>
			<div class="form-group">
                <label for="Le gustaria capacitarse ">Le gustaria capacitarse? (En que le gustaria capacitarse) <span style="color:red;">*</span></label>
                <input name="opicapper" type="text"  class="form-control" placeholder="Escriba 'No' en caso de no tener interes"  pattern="(?=.*[A-z ]).{2,50}" title= "Maximo 50 caracteres" required>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Enviar">
				<a href="home.php?var=101&id=<?= $id ?>" class="btn btn-success">Volver</a>
				<a href="home.php" class="btn btn-success" >Salir</a>
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
            <td><?php echo $dato[$i]['titcapper'] ?></td>
			<td><?php echo $dato[$i]['opicapper'] ?></td>
            <td><a href="home.php?var=11&id=<?php echo $dato1[0]['idpersona'] ?>&cod=<?php echo $dato[$i]["codcapper"]; ?>" class="btn btn-success">Editar</a></td>
            
		</tr>
	<?php } ?>		
		</table>
	</form>
</div>


