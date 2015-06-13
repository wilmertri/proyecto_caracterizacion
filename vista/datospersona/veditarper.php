<?php
	include ("controlador/cdatospersona.php");
	include("vista/conexion_sqlserver.php");
?>
<script language="javascript" src="js/jquery-1.9.1.js"></script><!-- llamamos al JQuery-->
<script language="javascript">
	function RecargarCiudades(value){
		var parametros = {
			"valor" : value
		};
		$.ajax({
			data: parametros,
			url: 'vista/miscript.php',
			type: 'post',
			success: function (response) {
	 			$("#reloadMunicipio").html(response);
			}
 		});
 	}
	
	function RecargarCiudadesnac(value){
		var parametros = {
			"valor" : value
		};
		$.ajax({
			data: parametros,
			url: 'vista/miscript2.php',
			type: 'post',
			success: function (response) {
	 			$("#reloadMunicipionac").html(response);
			}
 		});
 	}
	
	function RecargarCiudadesexp(value){
		var parametros = {
			"valor" : value
		};
		$.ajax({
			data: parametros,
			url: 'vista/miscript3.php',
			type: 'post',
			success: function (response) {
	 			$("#reloadMunicipioexp").html(response);
			}
 		});
 	}
	
	function mostrar(val){
				if (document.getElementById){ //se obtiene el id
					var el = document.getElementById('mosgen'); //se define la variable "el" igual a nuestro div
					el.style.display = 'none';
					if (val=='4'){
						el.style.display = 'block';
					}else{
						el.style.display = 'none';
					}
				}
			}
	function mostrardis(val){
				if (document.getElementById){ //se obtiene el id
					var el = document.getElementById('mosdis'); //se define la variable "el" igual a nuestro div
					el.style.display = 'none';
					if (val >='33' && val <= '36'){
						el.style.display = 'block';
					}else{
						if (val=='45'){
							el.style.display = 'none';
						}
					}
				}
			}
	function mostrarseg(val){
				if (document.getElementById){ //se obtiene el id
					var el = document.getElementById('mosseg'); //se define la variable "el" igual a nuestro div
					el.style.display = 'none';
					if (val =='15'){
						el.style.display = 'block';
					}else{
							el.style.display = 'none';
						}
					}
			}		
	function mostrartrab(val){
				if (document.getElementById){ //se obtiene el id
					var el = document.getElementById('mostrab'); //se define la variable "el" igual a nuestro div
					var e = document.getElementById('mostrab1');
					el.style.display = 'none';
					e.style.display = 'none';
					if (val=='52'){
						el.style.display = 'block';
						e.style.display = 'block';
					}else{
						el.style.display = 'none';
						e.style.display = 'none';
					}
				}
			}
</script>
<h1>Editar Datos de la Persona</h1>

<div class="forms1">
    <form name="form1" action="home.php?id=<?php echo $dato1[0]['idpersona'] ?>var=4" method="post">
        <div class="row">
			<div class="form-group col-lg-6">
                <label for="Required"><i>(<span style="color:red;">*</span>)Campos obligatorios</i></label>
            </div>
			 <div class="form-group col-lg-6">
				<label for="Numero Ficha">Numero Ficha</label> 
				<input name="numficha" type="text" value="<?php echo $dato1[0]['numficha'] ?>" class="form-control">
				<input type="hidden" name="actu" value="actu" />
				<input type="hidden" name="idpersona" value="<?php echo $dato1[0]['idpersona'] ?>" />
			</div>
		</div>
		<div class="row">
            <div class="form-group col-lg-6">
                <label for="Primer Nombre">Primer Nombre <span style="color:red;">*</span> </label>
                <input name="pnom" type="text" value="<?php echo $dato1[0]['pnomper'] ?>"class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="ej: andres" pattern="[A-z ]{2,20}" title="Se necesita un nombre"required autofocus>
            </div>
			<div class="form-group col-lg-6">
                <label for="Segundo Nombre">Segundo Nombre</label>
                <input name="snom" type="text" value="<?php echo $dato1[0]['snomper'] ?>" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="ej: felipe"  pattern="[A-z ]{2,20}">
            </div>
		</div>
		<div class="row">
            <div class="form-group col-lg-6">
                <label for="Primer Apellido">Primer Apellido <span style="color:red;">*</span></label>
                <input name="pape" type="text" value="<?php echo $dato1[0]['papeper'] ?>" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="ej: vargas"  pattern="[A-z ]{2,20}" required>
            </div>
			<div class="form-group col-lg-6">
                <label for="Segundo Apellido">Segundo Apellido</label>
                <input name="sape" type="text" value="<?php echo $dato1[0]['sapeper'] ?>" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="ej: torres"  pattern="[A-z ]{2,20}">
            </div>
		</div>
        <div class="row">
			<div class="form-group col-lg-6">
                <label for="Tipo de documento">Tipo de Documento <span style="color:red;">*</span></label>
                <select name="tipdoc" class="form-control" style="text-transform:uppercase;">
					<option value = "<?= $dato1[0]['tipdocper'] ?>">Seleccione una opción</option>
					<?php 
						for ($i=0; $i < count($tipdoc); $i++){
					?>
					<option value ="<?php echo $tipdoc[$i]['codval'] ?>" ><?php echo $tipdoc[$i]['nomval'] ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
            <div class="form-group col-lg-6">
                <label for="Numero de documento">Número de Documento <span style="color:red;">*</span></label>
                <input name="docper" type="text" value="<?php echo $dato1[0]['numdocper'] ?>"  class="form-control" pattern="[0-9]{6,10}" style="text-transform:uppercase;" placeholder="ej: 1072666555" required>
            </div>
		</div>
		<div class="row">
			<div class="form-group col-lg-12 center">
                <label for="Lugar de expedicion">Lugar de Expedición</label> 
            </div>
		</div>
		<div class="row">
			<div class="form-group col-lg-6">
                <label for="Departamento">Departamento <span style="color:red;">*</span></label>
                <select name="depto" onchange="javascript:RecargarCiudades(this.value);" class="form-control" style="text-transform:uppercase;">
 					<option value="0">Seleccione Departamento</option>
					<?php
 					
					$sql = "SELECT codubi, nomubi FROM vieubica ORDER BY nomubi";
 					echo $sql;
 					$conexionBD = new conexion_sqlserver();
 					$conexionBD->conectarBD();
 					$data = $conexionBD->ejecutarConsulta($sql,0); 
 					for($i=0;$i<count($data);$i++)
 					{	
					?>
						<option value="<?php echo $data[$i]['codubi'] ?>"><?php echo $data[$i]['nomubi'] ?></option>
					<?php } ?>
 				</select>
            </div>
			<div class="form-group col-lg-6">
                <label for="Municipio">Municipio <span style="color:red;">*</span></label>
                <div id="reloadMunicipio">
 					<select name="codubi" id="id_estado" class="form-control" style="text-transform:uppercase;">
						<option value="<?= $dato1[0]['lugexpdocper'] ?>">Seleccione municipio</option>
 					</select>
 				</div>
            </div>
		</div>
		<div class="row">
            <div class="form-group col-md-12">
			<label for="Genero">Genero</label>
				<select name="gen" onchange="javascript:mostrar(this.value);" class="form-control">
					<option value="<?= $dato1[0]['genper'] ?>">Seleccione una opción</option>
					
					<?php 
					 
						for ($i=0; $i < count($genper); $i++){
					?>
					<option value ="<?php echo $genper[$i]['codval'] ?>" ><?php echo $genper[$i]['nomval'] ?></option>
					<?php 
						} 
					?>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="form-group col-lg-6">
                <label for="Estado civil">Estado Civil <span style="color:red;">*</span></label>
                <select name="estciv" class="form-control" style="text-transform:uppercase;">
				<option value="<?= $dato1[0]['estcivper'] ?>">Seleccione una opción</option>
					<?php 
						for ($i=0; $i < count($estcivper); $i++){
					?>
					<option value ="<?php echo $estcivper[$i]['codval'] ?>" ><?php echo $estcivper[$i]['nomval'] ?></option>
					<?php 
						} 
					?>
					
				</select>
            </div>
			<div class="form-group col-lg-6" id="mosgen">
                <label for="Gestante o lactante">Gestante o Lactante</label>
				<select name="ges" class="form-control" style="text-transform:uppercase;">
					<option value ="<?= $dato1[0]['geslanper'] ?>">Seleccione una opción</option>
					<?php 
						for ($i=0; $i < count($gestlact); $i++){
					?>
					<option value ="<?php echo $gestlact[$i]['codval'] ?>" ><?php echo $gestlact[$i]['nomval'] ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
		</div>	
		<div class="row">
            <div class="form-group col-lg-6">
                <label for="Direccion">Dirección <span style="color:red;">*</span></label>
                <input name="dir" type="text" value="<?php echo $dato1[0]['dirper'] ?>" class="form-control" maxlenght="50" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="ej: cra 4 # 56 - 12 ">
            </div>
			<div class="form-group col-lg-6">
                <label for="Zona">Zona <span style="color:red;">*</span></label>
                <select name="zon" class="form-control" style="text-transform:uppercase;">
				<option value="<?= $dato1[0]['zonper'] ?>">Seleccione una opción</option>
					<?php 
						for ($i=0; $i < count($zona); $i++){
					?>
					<option value ="<?php echo $zona[$i]['codzona'] ?>" ><?php echo $zona[$i]['nomzona'] ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
		</div>
		<div class="row">
            <div class="form-group col-lg-6">
                <label for="Vereda">Vereda</label>
                <select name="ver" class="form-control" style="text-transform:uppercase;">
				<option value="<?= $dato1[0]['verper'] ?>">Seleccione una opción </option>
					<?php 
						for ($i=0; $i < count($ver1); $i++){
					?>
					<option value ="<?php echo $ver1[$i]['codver'] ?>" ><?php echo $ver1[$i]['nomver'] ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
			<div class="form-group col-lg-6">
                <label for="Sector">Sector <span style="color:red;">*</span></label>
                <input name="sec" type="text" value="<?php echo $dato1[0]['secper'] ?>" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="ej: río frío" class="form-control" maxlenght="50">
            </div>
		</div>
		<div class="row">
            <div class="form-group col-lg-12">
                <label for="Barrio o finca">Barrio o Finca</label>
				<input name="barfin" type="text" value="<?php echo $dato1[0]['barfinper'] ?>" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="ej: los zipas"  class="form-control" maxlenght="50">
            </div>
		</div>
		<div class="row">
            <div class="form-group col-lg-6">
                <label for="Telefono">Teléfono <span style="color:red;">*</span></label>
                <input name="tel" type="text" value="<?php echo $dato1[0]['telper'] ?>" class="form-control" pattern="[0-9]{6,10}" style="text-transform:uppercase;" placeholder="ejemplo: 8687555" required>
            </div>
			<div class="form-group col-lg-6">
                <label for="Telefono2">Teléfono 2</label>
                <input name="telseg" type="text" value="<?php echo $dato1[0]['telsegper'] ?>" class="form-control" pattern="[0-9]{6,10}" style="text-transform:uppercase;" placeholder="ejemplo: 3007878255">
            </div>
		</div>
		<div class="row">
            <div class="form-group col-lg-12 center">
                <label for="Lugar de nacimiento">Lugar de Nacimiento</label>
            </div>
		</div>
		<div class="row">
			<div class="form-group col-lg-6">
                <label for="Departamento">Departamento <span style="color:red;">*</span></label>
                <select name="deptonac" onchange="javascript:RecargarCiudadesnac(this.value);" class="form-control" style="text-transform:uppercase;">
 					<option value="0">Seleccione Departamento</option>
					<?php
 					
					$sql = "SELECT codubi, nomubi FROM vieubica ORDER BY nomubi";
 					echo $sql;
 					$conexionBD = new conexion_sqlserver();
 					$conexionBD->conectarBD();
 					$data = $conexionBD->ejecutarConsulta($sql,0); 
 					for($i=0;$i<count($data);$i++)
 					{	
					?>
						<option value="<?php echo $data[$i]['codubi'] ?>"><?php echo $data[$i]['nomubi'] ?></option>
					<?php } ?>
 				</select>
            </div>
			<div class="form-group col-lg-6">
                <label for="Municipio">Municipio <span style="color:red;">*</span></label>
                <div id="reloadMunicipionac">
 					<select name="codubinac" id="id_estado" class="form-control" style="text-transform:uppercase;">
						<option value="<?= $dato1[0]['lugnacper'] ?>">Seleccione municipio</option>
 					</select>
 				</div>
            </div>
		</div>
		<div class="row">
            <div class="form-group col-lg-6">
			    <label for="Fecha de nacimiento">Fecha de Nacimiento <span style="color:red;">*</span></label>
				<input name="fecnac" type="date" value="<?php echo $dato1[0]['fecnacper'] ?>" class="form-control" max="2014-12-01" min="1900-01-01">
            </div>
			<div class="form-group col-lg-6">
                <label for="Etnia">Grupo Poblacional <span style="color:red;">*</span></label>
                <select name="etnia" class="form-control" style="text-transform:uppercase;">
					<option value ="<?= $dato1[0]['etniaper'] ?>">Seleccione una opción</option>
					<?php 
						for ($i=0; $i < count($etnia); $i++){
					?>
					<option value ="<?php echo $etnia[$i]['codval'] ?>" ><?php echo $etnia[$i]['nomval'] ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
		</div>
		<div class="row">
			<div class="form-group col-lg-6">
                <label for="Hijos a Cargo">Hijos a Cargo</label>
                <select name="hijosacargo" class="form-control" style="text-transform:uppercase;">
					<option value ="<?= $dato1[0]['hijosdepper'] ?>">Seleccione una opción</option>
					<?php 
						for ($i=0; $i < count($hijosacargo1); $i++){
					?>
					<option value ="<?php echo $hijosacargo1[$i]['codval'] ?>" ><?php echo $hijosacargo1[$i]['nomval'] ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
			<div class="form-group col-lg-6">
                <label for="Relaciones sexuales">Establece Relaciones Sexuales de Pareja Con</label>
                <select name="relsexper" class="form-control" style="text-transform:uppercase;">
					<option value ="<?= $dato1[0]['relsexper'] ?>">Seleccione una opción</option>
					<?php 
						for ($i=0; $i < count($relsexper1); $i++){
					?>
					<option value ="<?php echo $relsexper1[$i]['codval'] ?>" ><?php echo $relsexper1[$i]['nomval'] ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
		</div>
		<div class="row">
			<div class="form-group col-lg-6">
                <label for="Libreta Militar">Libreta Militar</label>
                <select name="libretmil" class="form-control" style="text-transform:uppercase;">
					<option value = "<?= $dato1[0]['libretmil'] ?>"> Seleccione una opción </option>
					<?php 
						for ($i=0; $i < count($libretmil1); $i++){
					?>
					<option value ="<?php echo $libretmil1[$i]['codval'] ?>" ><?php echo $libretmil1[$i]['nomval'] ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
			<div class="form-group col-lg-6">
                <label for="Libreta Militar Exención">La Posesión de la Libreta Se Debe a la Exención del Servicio Militar por su Condición de Victima del Conflicto </label>
                <select name="tramlibretmil" class="form-control" style="text-transform:uppercase;">
					<option value = "<?= $dato1[0]['tramlibretmil'] ?>"> Seleccione una opción </option>
					<?php 
						for ($i=0; $i < count($tramlibretmil1); $i++){
					?>
					<option value ="<?php echo $tramlibretmil1[$i]['codval'] ?>" ><?php echo $tramlibretmil1[$i]['nomval'] ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
		</div>
		<div class="row">
			<div class="form-group col-lg-6">
				<label for="Fecha de la edicion">Fecha<span style="color:red;">*</span></label>
				<input name="fecha" type="date" class="form-control" required>
            </div>
			<div class="form-group col-lg-6">
                <label for="Observacion">Observación<span style="color:red;">*</span></label>
                <input name="descripcion" type="text" class="form-control"  style="text-transform:uppercase;" placeholder="Cambios realizados" required>
            </div>
		</div>
		<div class="row">
            <div class="form-group col-lg-6">
                <label for="Required"><i>(<span style="color:red;">*</span>)Campos obligatorios</i></label>
            </div>
		</div>
		<div class="row">	
			<div class="form-group col-lg-12 center">
				<a href="javascript:history.back();" class="btn btn-success">Volver</a>
                <input type="submit" class="btn btn-success" value="Actualizar">
				<a href="home.php" class="btn btn-success" >Salir</a>
            </div>
		</div>
    </form>
</div>
