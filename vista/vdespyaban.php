<?php
	include ("controlador/cdespyaban.php");
	include("vista/conexion_sqlserver.php");
?>
<script language="javascript" src="js/jquery-1.9.1.js"></script><!-- llamamos al JQuery-->
<script language="javascript">

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
	
	function RecargarCiudadesReubi(value){
		var parametros = {
			"valor" : value
		};
		$.ajax({
			data: parametros,
			url: 'vista/miscript4.php',
			type: 'post',
			success: function (response) {
	 			$("#reloadMunicipioreub").html(response);
			}
 		});
 	}
</script>
<h2>Insertar Datos de Despojo y Abandono de Tierras</h2>

<div class="forms1">
	<form name="form1" action="" method="post">
		<div class="row">
			<div class="form-group col-lg-12 center">
                <label for="Lugar de expedicion">Lugar de Expulsion</label> 
            </div> 
		</div>
		<div class="row">
			<div class="form-group col-lg-6 col-md-6">
                <label for="Departamento">Departamento <span style="color:red;">*</span></label>
                <select name="depto" onchange="javascript:RecargarCiudadesexp(this.value);" class="form-control">
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
					<?php }?>
 				</select>
            </div>
			<div class="form-group col-lg-6 col-md-6">
                <label for="Municipio">Municipio <span style="color:red;">*</span></label>
                <div id="reloadMunicipioexp">
 					<select name="codubi" id="id_estado" class="form-control" style="text-transform:uppercase;">
						<option value="0">Seleccione municipio</option>
 					</select>
 				</div>
            </div>
		</div> 
		<div class="row">
			<div class="form-group col-lg-6 col-md-6">
			<br>
			<br>
				<label for="Fecha de expulsion">Fecha de expulsion</label>
					<input name="fechadeexpulsion" type="date" class="form-control">
            </div>
			<div class="form-group col-lg-6 col-md-6">
				<label for="Actor armado">Después del hecho victimizante, ¿Algún actor armado le ha impedido salir de un territorio?</label>
				<select name="actorarmado" onchange="javascript:mostrar(this.value);" class="form-control">
						<option value=0> Seleccione una opción </option>>
						
						<?php 
						//Select
						//$gen = $ins->selpar();
						for ($i=0; $i < count($respuesta_cerrada); $i++){
						?>
				
						<option value="<?php echo $respuesta_cerrada[$i]['codval'] ?>" ><?php echo $respuesta_cerrada[$i]['nomval'] ?></option>
				
						<?php } ?>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="form-group col-lg-6 col-md-6">
				<label for="Ingreso alimentos">Después del hecho victimizante, ¿algún actor armado ha impedido el ingreso de alimentos o bienes básicos a la zona donde ha estado habitando?</label>
				<select name="ingresoalimentos" onchange="javascript:mostrar(this.value);" class="form-control">
						<option value=0> Seleccione una opción </option>>
						
						<?php 
						//Select
						//$gen = $ins->selpar();
						for ($i=0; $i < count($respuesta_cerrada); $i++){
						?>
				
						<option value="<?php echo $respuesta_cerrada[$i]['codval'] ?>" ><?php echo $respuesta_cerrada[$i]['nomval'] ?></option>
				
						<?php } ?>
				</select>
			</div>
			<div class="form-group col-lg-6 col-md-6">
			<br>
			<br>
			<br>
                <label for="Tiempo de permanencia">Tiempo permanencia en el municipio <span style="color:red;">*</span></label>
                <input name="tieper" type="text" class="form-control" pattern="[0-9]{1,2}" placeholder="">
            </div>
		</div>
		<div class="row">
            <div class="form-group col-lg-6 col-md-6">
			<br>
                <label for="factores de permanencia">Factores de permanencia en el municipio</label>
                <select name="factpermanencia" class="form-control" style="text-transform:uppercase;">
				<option value=0> Seleccione una opción </option>
					<?php 
						for ($i=0; $i < count($factores_permanencia); $i++){
					?>
					<option value ="<?php echo $factores_permanencia[$i]['idfactor'] ?>" ><?php echo $factores_permanencia[$i]['nomfact'] ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
			<div class="form-group col-lg-6 col-md-6">
				<label for="Solicitud RUPD/RUV">Quien solicito la inclucion en el RUPD/RUV:</label>
				<select name="solicitud" onchange="javascript:mostrar(this.value);" class="form-control">
						<option value=0> Seleccione una opción </option>>
						
				   
						<?php 
						//Select
						//$gen = $ins->selpar();
						for ($i=0; $i < count($solicitud_); $i++){
						?>
				
						<option value="<?php echo $solicitud_[$i]['codval'] ?>" ><?php echo $solicitud_[$i]['nomval'] ?></option>
				
						<?php } ?>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="form-group col-lg-6 col-md-6">
			<br>
			<br>
					<label for="Razon inclusion RUPD/RUV">¿… fue incluido en el RUPD / RUV por:</label>
					<select name="razoninclusion" onchange="javascript:mostrar(this.value);" class="form-control">
							<option value=0> Seleccione una opción </option>>
							
					   
							<?php 
							//Select
							//$gen = $ins->selpar();
							for ($i=0; $i < count($razon_inclusion); $i++){
							?>
					
							<option value="<?php echo $razon_inclusion[$i]['codval'] ?>" ><?php echo $razon_inclusion[$i]['nomval'] ?></option>
					
							<?php } ?>
					</select>
			</div>
			<div class="form-group col-lg-6 col-md-6">
				<label for="Uso predio despues del despojo">Usted o algún miembro del hogar tenía un predio que debido a la violencia causada por un grupo armado tuvo que:</label>
				<select name="usoprediodespues" onchange="javascript:mostrar(this.value);" class="form-control">
							<option value=0> Seleccione una opción </option>>
							
					   
							<?php 
							//Select
							//$gen = $ins->selpar();
							for ($i=0; $i < count($predio_perdido_por); $i++){
							?>
					
							<option value="<?php echo $predio_perdido_por[$i]['codval'] ?>" ><?php echo $predio_perdido_por[$i]['nomval'] ?></option>
					
							<?php } ?>
				</select>
			</div>
		</div>
		<div class="row">	
			<div class="form-group col-lg-6 col-md-6">
				<label for="Perdida de bienes">¿Cuántos bienes inmuebles han perdido?</label>
				<input name="perdidadebienes" type="number" class="form-control">
            </div>
			<div class="form-group col-lg-6 col-md-6">
				<label for="Tipo de bien">El tipo de bien inmueble que abandonó es:</label>
				<select name="tipodebien" onchange="javascript:mostrar(this.value);" class="form-control">
							<option value=0> Seleccione una opción </option>>
							
					   
							<?php 
							//Select
							//$gen = $ins->selpar();
							for ($i=0; $i < count($tipo_inmueble); $i++){
							?>
					
							<option value="<?php echo $tipo_inmueble[$i]['codval'] ?>" ><?php echo $tipo_inmueble[$i]['nomval'] ?></option>
					
							<?php } ?>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="form-group col-lg-6 col-md-6">
				<label for="Relacion con el bien">¿Qué relación tiene con el bien que abandonó?</label>
				<select name="relacionconelbien" onchange="javascript:mostrar(this.value);" class="form-control">
							<option value=0> Seleccione una opción </option>>
							
					   
							<?php 
							//Select
							//$gen = $ins->selpar();
							for ($i=0; $i < count($relacion_con_el_bien); $i++){
							?>
					
							<option value="<?php echo $relacion_con_el_bien[$i]['codval'] ?>" ><?php echo $relacion_con_el_bien[$i]['nomval'] ?></option>
					
							<?php } ?>
				</select>
			</div>
			<div class="form-group col-lg-6 col-md-6">
			<br>
				<label for="Tipo de familia">Tipo de familia</label>
				<select name="tipodefamilia" onchange="javascript:mostrar(this.value);" class="form-control">
							<option value=0> Seleccione una opción </option>>
							
					   
							<?php 
							//Select
							//$gen = $ins->selpar();
							for ($i=0; $i < count($tipo_de_familia); $i++){
							?>
					
							<option value="<?php echo $tipo_de_familia[$i]['codval'] ?>" ><?php echo $tipo_de_familia[$i]['nomval'] ?></option>
					
							<?php } ?>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="form-group col-lg-6 col-md-6">
					<label for="Ideal RUPD">Para todos los miembros del hogar incluidos en el RUPD/RUV Su ideal es?</label>
					<select name="ideal" onchange="javascript:mostrar(this.value);" class="form-control">
								<option value=0> Seleccione una opción </option>>
								
						   
								<?php 
								//Select
								//$gen = $ins->selpar();
								for ($i=0; $i < count($ideal_rupd); $i++){
								?>
						
								<option value="<?php echo $ideal_rupd[$i]['codval'] ?>" ><?php echo $ideal_rupd[$i]['nomval'] ?></option>
						
								<?php } ?>
					</select>
				</div>
				<div class="form-group col-lg-6 col-md-6">

				</div>
			</div>
			<div class="row">
				<div class="form-group col-lg-12 center">
					<label for="Lugar de expedicion">Si seleccionó reubicación a que lugar se trasladaría</label> 
				</div> 
			</div>
			<div class="row">
				<div class="form-group col-lg-6 col-md-6">
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
						<?php }?>
					</select>
				</div>
				<div class="form-group col-lg-6 col-md-6">
					<label for="Municipio">Municipio <span style="color:red;">*</span></label>
					<div id="reloadMunicipioreub">
						<select name="codubi" id="id_estado" class="form-control" style="text-transform:uppercase;">
							<option value="0">Seleccione municipio</option>
						</select>
					</div>
				</div>
			</div> 
			<div class="row">
			<div class="form-group col-lg-6 col-md-6">
				<label for="Razon de retorno">Cuál ha sido la principal razón por la cual no se ha retornado o reubicado?</label>
				<select name="razonderetorno" onchange="javascript:mostrar(this.value);" class="form-control">
							<option value=0> Seleccione una opción </option>>
								
						   
							<?php 
							//Select
							//$gen = $ins->selpar();
							for ($i=0; $i < count($razon_retorno); $i++){
							?>
						
							<option value="<?php echo $razon_retorno[$i]['codval'] ?>" ><?php echo $razon_retorno[$i]['nomval'] ?></option>
						
							<?php } ?>
				</select>
			</div>
			<div class="form-group col-lg-6 col-md-6">
			<br>
				<label for="Medidas de proteccion">Han solicitado medidas de protección?</label>
				<select name="medidasdeproteccion" onchange="javascript:mostrar(this.value);" class="form-control">
							<option value=0> Seleccione una opción </option>>
							
					   
							<?php 
							//Select
							//$gen = $ins->selpar();
							for ($i=0; $i < count($respuesta_cerrada_dos); $i++){
							?>
					
							<option value="<?php echo $respuesta_cerrada_dos[$i]['codval'] ?>" ><?php echo $respuesta_cerrada_dos[$i]['nomval'] ?></option>
					
							<?php } ?>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="form-group col-lg-6 col-md-6">
			<br>
				<label for="Recibio medidas de proteccion">Recibio medidas de proteccion</label>
				<select name="recibiomedidasdeproteccion" onchange="javascript:mostrar(this.value);" class="form-control">
							<option value=0> Seleccione una opción </option>>
								
						   
							<?php 
							//Select
							//$gen = $ins->selpar();
							for ($i=0; $i < count($respuesta_cerrada_dos); $i++){
							?>
						
							<option value="<?php echo $respuesta_cerrada_dos[$i]['codval'] ?>" ><?php echo $respuesta_cerrada_dos[$i]['nomval'] ?></option>
						
							<?php } ?>
				</select>
			</div>
			<div class="form-group col-lg-6 col-md-6">
				<label for="Ha recibido indemnizacion">Ha recibido indemnización por parte de la Unidad de Víctimas</label>
				<select name="harecibidoindemnizacion" onchange="javascript:mostrar(this.value);" class="form-control">
							<option value=0> Seleccione una opción </option>>
							
						   
							<?php 
							//Select
							//$gen = $ins->selpar();
							for ($i=0; $i < count($respuesta_cerrada_dos); $i++){
							?>
						
							<option value="<?php echo $respuesta_cerrada_dos[$i]['codval'] ?>" ><?php echo $respuesta_cerrada_dos[$i]['nomval'] ?></option>
						
							<?php } ?>
				</select>
			</div>
		</div>
		<div class="row">	
			<div class="form-group col-lg-6 col-md-6 center">
				<label for="Observaciones">Observaciones</label>
				<input name="observaciones" type="text" class="form-control">
            </div>
			<div  class="row"><br>
			<div class="form-group col-lg-6 col-md-6 center">
				<input type="submit" class="btn btn-primary">
			</div>	
			</div>
		</div>		
</div>		
       