<?php
	include ("controlador/cdiscper.php");
?>
<script language="javascript" src="js/jquery-1.9.1.js"></script><!-- llamamos al JQuery-->
<script language="javascript">
	function RecargarClases(value){
		//document.write(value);
		var parametros = {
                "valor" : value
        };
		
        $.ajax({
                data:  parametros,
                url:   'vista/miscript4.php',
                type:  'post',
                success:  function (response) {
                        $("#reloadClase").html(response);
                }
        });
     }
</script>
<h1>Crear discapacidad</h1>
<div class="forms">
	<form name="form1" action="" method="post">
		<div class="row">
			<div class="form-group">
				<label for="Clase de discapacidad">Tipo de Discapacidad</label>
                <select name="tipodis" onchange="javascript:RecargarClases(this.value);" class="form-control">
					<?php 
						for ($i=0; $i<count($tipodis); $i++){
					?>
					<option value ="<?php echo $tipodis[$i]['idtipodis']; ?>" ><?php echo $tipodis[$i]['nomtipodis'] ?></option>
					<?php 
						} 
					?>
				</select>
			</div>
			<div class="form-group">
				<input type="hidden" name="famper" value="<?php echo $datfam; ?>">
                <label for="Clase de discapacidad">Clase de discapacidad</label>
                <div id="reloadClase">
 					<select name="clasdis" id="id_estado" class="form-control">
						<option value="0">Seleccione clase de discapacidad</option>
 					</select>
 				</div>
            </div>
            <div class="form-group">
            	<label for="Clase de discapacidad">Decripción de discapacidad</label>
            	<input type="text" name="desc" class="form-control">
            </div>
			<div class="form-group">
                <input type="submit" class="btn btn-primary" value="Insertar discapacidad">
				<a href="home.php" class="btn btn-primary" >Salir</a>
            </div>
		</div>
    </form>
</div>
<div class="tbcenter">
	<form id="form2" name="form2" method="GET" action="" onSubmit="return confirm('¿Desea eliminar?')">
		<table width="700px" class="table table-striped">
			<tr>
				<th>Discapacidad</th>
				<th>Descripcion</th>
				<th>Editar</th>
			</tr>
			<?php 
			//Select
			if ($datfam) {
				$datos = $ins -> seldisper3($id);
				for ($i=0; $i < count($datos); $i++){
			?>
			<tr>
				<td><?php echo $datos[$i]['nomclasedis'] ?></td>
				<td><?php echo $datos[$i]['descripcion']?></td>
				<td><a href="home.php?id=<?php echo $datos[$i]['iddiscperfam'] ?>&var=35" class="btn btn-primary">Editar</a></td>
			</tr>
			<?php  
				}
				}  
			else
			{
			//Select
			$dato = $ins -> seldisper2($id);
				for ($i=0; $i < count($dato); $i++)
				{
			?>
			<tr>
				<td><?php echo $dato[$i]['nomclasedis'] ?></td>
				<td><?php echo $dato[$i]['descripcion']?></td>
				<td><a href="home.php?id=<?php echo $dato[$i]['iddiscper'] ?>&var=35" class="btn btn-primary">Editar</a></td>
			</tr>
			<?php  
				} 
			} 
			?>
		</table>
	</form>
</div>