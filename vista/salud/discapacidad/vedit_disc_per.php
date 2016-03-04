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
<h1>Agregar Discapacidad de la Persona</h1>
<div class="forms">
	<form name="form1" action="home.php?var=36&id=<?= $id; ?>" method="post">
		<div class="row">
			<div class="form-group">
                <label for="Codigo">Código</label>
                <input name="coddisper" class="form-control" value="<?= $dato1[0]['iddiscper'] ?>" disabled>
                <input type="hidden" name="actu" value="actu" />
				<input type="hidden" name="iddisc" value="<?= $dato1[0]['iddiscper'] ?>" />
				<input type="hidden" name="numdoc" value="<?= $dato1[0]['numdocper'] ?>" />
            </div>
			<div class="form-group">
				<label for="Clase de discapacidad">Tipo de Discapacidad</label>
                <select name="tipodis" onchange="javascript:RecargarClases(this.value);" class="form-control">
					<option value="0">Seleccione tipo de discapacidad</option>
					<?php 
						for ($i=0; $i<count($tipodis); $i++){
					?>
					<option value ="<?= $tipodis[$i]['idtipodis']; ?>" ><?= $tipodis[$i]['nomtipodis'] ?></option>
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
						<option value="<?= $dato1[0]['idclasdis'] ?>">Seleccione clase de discapacidad</option>
 					</select>
 				</div>
            </div>
            <div class="form-group">
            	<label for="Clase de discapacidad">Decripción de discapacidad</label>
            	<input type="text" name="desc" class="form-control" value="<?= $dato1[0]['descripcion'] ?>">
            </div>
			<div class="form-group">
                <input type="submit" class="btn btn-success" value="Actualizar discapacidad">
				<a href="home.php?var=36&id=<?= $id; ?>" class="btn btn-success" >Volver</a>
            </div>
		</div>
    </form>
</div>