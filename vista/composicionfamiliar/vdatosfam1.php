<?php
	include ("controlador/cdatosfam.php");
?>
<script language="javascript" src="js/jquery-1.9.1.js"></script><!-- llamamos al JQuery-->
<script language="javascript">

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
			};
</script>
<h2>Editar datos del familiar</h2>
<?php
	$datoact = $ins	->selper1($id);
?>
<div class="forms1">
	<form name="form1" action="home.php?var=8&id=<?php echo $datoact[0]['numdocfam'] ?>" method="post">
		<div class="row">
			<div class="form-group col-md-6">
				<label for="Documento">Documento</label>
                <input name="documento" type="text" class="form-control" value="<?php echo $datoact[0]['numdocfam'] ?>" disabled>
                <input type="hidden" name="actu" value="actu" />
                <input type="hidden" name="documento" value="<?php echo $datoact[0]['numdocfam'] ?>">
            </div>
			<div class="form-group col-md-6">
				<label for="Primer nombre">Primer nombre</label>
                <input name="primernombre" type="text" value="<?php echo $datoact[0]['pnomfam'] ?>" class="form-control">
            </div>
		</div>
		<div class="row">
			<div class="form-group col-md-6">
				<label for="Segundo nombre">Segundo nombre</label>
                <input name="segundonombre" type="text" value="<?php echo $datoact[0]['snomfam'] ?>"class="form-control">
            </div>
			<div class="form-group col-md-6">
				<label for="Primer apellido">Primer apellido</label>
                <input name="primerapellido" type="text" value="<?php echo $datoact[0]['papefam'] ?>" class="form-control">
            </div>
		</div>
		<div class="row">
			<div class="form-group col-md-6">
				<label for="Segundo apellido">Segundo apellido</label>
                <input name="segundoapellido" type="text" value="<?php echo $datoact[0]['sapefam'] ?>"class="form-control">
            </div>
			<div class="form-group col-md-6">
				<label for="Fecha de nacimiento">Fecha de nacimiento</label>
                <input name="fechadenacimiento" type="date" value="<?php echo $datoact[0]['fecnacfam'] ?>" class="form-control">
            </div>
		</div>
		<div class="row">
		<div class="form-group col-md-6">
			<label for="Genero">Genero</label>
				<select name="genero" onchange="javascript:mostrar(this.value);" class="form-control">
					<option value=0> Seleccione una opcion </option>
					<?php 
					//Select
					//$gen = $ins->selpar();
					for ($i=0; $i < count($gen); $i++){
					?>
            
					<option value="<?php echo $gen[$i]['codval'] ?>" ><?php echo $gen[$i]['nomval'] ?></option>
            
					<?php } ?>
				</select>
			</div>
			<div class="form-group col-md-6" id="mosgen">
			<label for="Gestante o lactante">Gestante o lactante</label>
				<select name="gestanteolactante"class="form-control">
				<option value = 0> Seleccione una opcion </option>
               
					<?php 
					//Select
					//$dat1 = $ins->selpar();
					for ($i=0; $i < count($gest); $i++){
					?>
            
					<option value="<?php echo $gest[$i]['codval'] ?>" ><?php echo $gest[$i]['nomval'] ?></option>
            
					<?php } ?>
				</select>
			</div>
        </div>
		<div class="row">
			<div class="form-group col-md-6">
			<label for="Nivel de escolaridad">Nivel de escolaridad</label>
				<select name="niveldeescolaridad"class="form-control">
               		<option value=0> Seleccione una opcion </option>
					<?php 
					//Select
					//$dat1 = $ins->selpar();
					for ($i=0; $i < count($nesc); $i++){
					?>
            
					<option value="<?php echo $nesc[$i]['codval'] ?>" ><?php echo $nesc[$i]['nomval'] ?></option>
            
					<?php } ?>
				</select>
			</div>
			<div class="form-group col-md-6">
				<label for="Ultimo grado cursado">Ultimo grado cursado</label>
                <input name="ultimogradocursado" type="text" value="<?php echo $datoact[0]['ultgracurfam'] ?>" class="form-control">
            </div>
		</div>
		<div class="row">
			<div class="form-group col-md-6">
				<label for="Ocupación">Ocupación</label>
                <input name="ocupacion" type="text" value="<?php echo $datoact[0]['ocuactfam'] ?>"class="form-control">
            </div>
			<div class="form-group col-md-6">
				<label for="Etnia">Etnia</label>
                <select name="etnia"class="form-control">
               		<option value=0> Seleccione una opcion </option>
					<?php 
					//Select
					//$dat1 = $ins->selpar();
					for ($i=0; $i < count($etnia); $i++){
					?>
            
					<option value="<?php echo $etnia[$i]['codval'] ?>" ><?php echo $etnia[$i]['nomval'] ?></option>
            
					<?php } ?>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-6">
		<label for="Parentesco">Parentesco</label>
				<select name="parentesco"class="form-control">
               		<option value=0> Seleccione una opcion </option>
					<?php 
					//Select
					//$dat1 = $ins->selpar();
					for ($i=0; $i < count($parent); $i++){
					?>
            
					<option value="<?php echo $parent[$i]['codval'] ?>" ><?php echo $parent[$i]['nomval'] ?></option>
            
					<?php } ?>
				</select>
			</div>
		</div>
		
</div>
			<div class="form-group">
                <input type="submit" class="btn btn-primary" value="Guardar">
            </div>
        </div>
	</form>
</div>	
			
	