<?php
	include("controlador/cingreso.php");
?>
<h1> Actualizar Datos Ingresos</h1>
<div class="forms">
    <form name="form1" action="home.php?var=92&id=<?php echo $dato1[0]['idpersona'] ?>" method="post">
        <div class="row">
            <div class="form-group">
                <label for="Codigo">Codigo</label>
                <input name="coding" class="form-control" value="<?php echo $dato2[0]['coding'] ?>" disabled>
                <input type="hidden" name="actu" value="actu" />
				<input type="hidden" name="coding" value="<?php echo $dato2[0]['coding'] ?>" />
            </div>
			<div class="form-group">
                <label for="Tipo ingreso">Tipo ingreso</label>
                <select name="tipoing" class="form-control">
					<option value ="<?= $dato1[0]['tipoing'] ?>"> Seleccione una opción </option>
					<?php 
						for ($i=0; $i < count($tipoing1); $i++){
					?>
					<option value ="<?php echo $tipoing1[$i]['codval'] ?>" ><?php echo $tipoing1[$i]['nomval'] ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
			
			<div class="form-group">
                <label for="ingreso">ingreso</label>
                <input name="ing" type="text" value="<?php echo $dato2[0]['ing'] ?>" class="form-control">
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
            <th>Tipo ingreso</th>
			<th>ingreso</th>
            <th>Editar</th>
        </tr>
        <?php
			$dato = $ins -> selingreso2($id);
			for($i=0;$i<count($dato);$i++) {
		?>
		<tr>
			<td align = "left"><?php echo $dato[$i]["coding"]; ?></td>
			<td align = "center"><?php echo $dato[$i]["tipoing"]; ?></td>
			<td align = "left"><?php echo $dato[$i]["ing"]; ?></td>
			<td><a href="home.php?var=93&id=<?php echo $dato1[0]['idpersona'] ?>&cod=<?php echo $dato[$i]["coding"]; ?>" class="btn btn-success">Editar</a></td>
		</tr>
			<?php } ?>		
		</table>
	</form>
</div>
