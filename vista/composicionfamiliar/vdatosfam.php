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
<h2>Insertar Datos del familiar</h2>
<div class="forms1">
	<form name="form1" action="" method="post">
        <div class="row">
            <div class="form-group col-md-6">
			<label for="Documento">Documento</label>
                <input name="documento" type="text" class="form-control">
            </div>
            <div class="form-group col-md-6">
			<label for="Primer nombre">Primer nombre</label>
                <input name="primernombre" type="text" class="form-control">
            </div>
        </div>
		<div class="row">
			<div class="form-group col-md-6">
			<label for="Segundo nombre">Segundo nombre</label>
                <input name="segundonombre" type="text" class="form-control">
            </div>
            <div class="form-group col-md-6">
			<label for="Primer apellido">Primer apellido</label>
                <input name="primerapellido" type="text" class="form-control">
            </div>
		</div>
		<div class="row">
			<div class="form-group col-md-6">
			<label for="Segundo apellido">Segundo apellido</label>
                <input name="segundoapellido" type="text" class="form-control">
            </div>
            <div class="form-group col-md-6">
			<label for="Fecha de nacimiento">Fecha de nacimiento</label>
                <input name="fechadenacimiento" type="date" class="form-control">
            </div>
        </div>
		<div class="row">
			<div class="form-group col-md-6">
			<label for="Genero">Genero</label>
				<select name="genero" onchange="javascript:mostrar(this.value);" class="form-control">
					<option value=0> Seleccione una opcion </option>>
					
               
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
				<select name="gestanteolactante" class="form-control">
					<option value=0> Seleccione una opcion </option>
               
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
                <input name="ultimogradocursado" type="text" class="form-control">
            </div>
		</div>
		<div class="row">
			<div class="form-group col-md-6">
			<label for="Ocupacion">Ocupacion</label>
                <input name="ocupacion" type="text" class="form-control">
            </div>
			<div class="form-group col-md-6">
			<label for="Etnia">Etnia</label>
				<select name="etnia"class="form-control">
				<option value=0> Seleccione una opcion </option>>
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
				<option value=0> Seleccione una opcion </option>>
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
			<div class="form-group">
                <input type="submit" class="btn btn-primary" value="Guardar">
            </div>
        </div>
    </form>

			<h1>Listado</h1><br>
			<table class="table" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>Documento</th>
						<th>Primer nombre</th>
						<th>Primer apellido</th>
						<th>Genero</th>
						<th>Parentesco</th>
						<th>Ver Informacion</th>
					</tr>
				</thead>
				
				<tfoot>
					<tr>
						<th>Documento</th>
						<th>Primer nombre</th>
						<th>Primer apellido</th>
						<th>Genero</th>
						<th>Parentesco</th>
						<th>Ver Informacion</th>
					</tr>
				</tfoot>
				
				<tbody>		
					<?php
						$dat = $ins->selper2($id);
						for($i=0;$i<count($dat);$i++) {
							$gene = $ins->valor2($dat[$i]["genfam"]);
							$pare = $ins->valor2($dat[$i]["parperfam"]);
					?>
		
					<tr>
						<td align = "left"><?php echo $dat[$i]["numdocfam"]; ?></td>
						<td align = "left"><?php echo $dat[$i]["pnomfam"]; ?></td>
						<td align = "left"><?php echo $dat[$i]["papefam"]; ?></td>
						<td align = "left"><?php echo $gene[0]["nomval"]; ?></td>
						<td align = "left"><?php echo $pare[0]["nomval"]; ?></td>
						<td align = "center"><a href ="home.php?var=8&id=<?php echo $dat[$i]["numdocfam"]; ?>" class="btn btn-success">Detalle</a></td>
					</tr>
					<?php } ?>
				</tbody>
		</table>
</div>