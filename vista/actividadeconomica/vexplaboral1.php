<?php
	include("controlador/cexplaboral.php");
?>
<h1> Actualizar Datos Experiencia Laboral</h1>
<div class="forms">
    <form name="form1" action="home.php?var=14&id=<?php echo $dato1[0]['idpersona'] ?>" method="post">
        <div class="row">
            <div class="form-group">
                <label for="Codigo">Codigo</label>
                <input name="codexplab" class="form-control" value="<?php echo $dato2[0]['codexplab'] ?>" disabled>
                <input type="hidden" name="actu" value="actu" />
				<input type="hidden" name="codexplab" value="<?php echo $dato2[0]['codexplab'] ?>" />
            </div>
			<div class="form-group">
                <label for="Nombre labor de la experiencia">Nombre labor de la experiencia </label>
                <input name="labexp" type="text" value="<?php echo $dato2[0]['labexp'] ?>" class="form-control">
            </div>
			
			<div class="form-group">
                <label for="Descripcion de la labor">Descripcion de la labor </label>
                <input name="desexp" type="text" value="<?php echo $dato2[0]['desexp'] ?>" class="form-control">
            </div>
		
			<div class="form-group">
                <label for="Ingreso">Ingreso </label>
                <input name="ingexp" type="text" value="<?php echo $dato2[0]['ingexp'] ?>" class="form-control">
            </div>
			<div class="form-group">
                <input type="submit" class="btn btn-success" value="Actualizar">
				<a href="home.php?var=91&id=<?php echo $dato1[0]['idpersona'] ?>" class="btn btn-success">Volver</a>
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
            <th>Experiencia laboral</th>
			<th>Descripcion</th>
            <th>Ingresos</th>
            <th>Editar</th>
        </tr>
        <?php
			$dato = $ins -> selexpper2($id);
			for($i=0;$i<count($dato);$i++) {
		?>
		<tr>
			<td align = "left"><?php echo $dato[$i]["codexplab"]; ?></td>
			<td align = "center"><?php echo $dato[$i]["labexp"]; ?></td>
			<td align = "left"><?php echo $dato[$i]["desexp"]; ?></td>
			<td align = "right"><?php echo $dato[$i]["ingexp"]; ?></td>
			<td><a href="home.php?var=15&id=<?php echo $dato1[0]['idpersona'] ?>&cod=<?php echo $dato[$i]["codexplab"]; ?>" class="btn btn-success">Editar</a></td>
		</tr>
			<?php } ?>		
		</table>
	</form>
</div>
