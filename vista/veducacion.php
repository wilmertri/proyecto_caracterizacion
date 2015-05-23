<?php
	include ("controlador/ceducacion.php");
	include("vista/conexion_sqlserver.php");
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
<h1>Ingresar Datos academicos</h1>
<div class="forms1">
    <form name="form1" action="home.php?var=3" method="post">
		<div class="row">
            <div class="form-group col-md-6">
                <label for="Required"><i>(<span style="color:red;">*</span>)Campos obligatorios</i></label>
            </div>
		</div>
		<div class="row">
            <div class="form-group col-md-6">
                <label for="Nivel Educativo">Nivel Educativo Alcanzado (Último año o grado aprobado) <span style="color:red;">*</span></label>
                <select name="ultgra" class="form-control" style="text-transform:uppercase;">
					<option value = 0> Seleccione una opción </option>
					<?php 
						for ($i=0; $i < count($ultgra); $i++){
					?>
					<option value ="<?php echo $ultgra[$i]['codval'] ?>" ><?php echo $ultgra[$i]['nomval'] ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
			
			<div class="form-group col-md-6 center">
                <label for="Titulo Obtenido">Titulo Obtenido <span style="color:red;">*</span></label>
                <select name="titobt" class="form-control" style="text-transform:uppercase;">
				<option value=0> Seleccione una opción </option>
					<?php 
						for ($i=0; $i < count($titobt); $i++){
					?>
					<option value ="<?php echo $titobt[$i]['idtable1'] ?>" ><?php echo $titobt[$i]['nombreprof'] ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
		</div>
		<div class="row">
		
            <div class="form-group col-md-6">
                <label for="Matriculado">¿Actualmente está matriculado(a)? <span style="color:red;">*</span></label>
                <select name="mat" class="form-control" style="text-transform:uppercase;">
					<option value = 0> Seleccione una opción </option>
					<?php 
						for ($i=0; $i < count($mat); $i++){
					?>
					<option value ="<?php echo $mat[$i]['codval'] ?>" ><?php echo $mat[$i]['nomval'] ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
			
			
			
			<div class="form-group col-md-6">
                <label for="Razon no estudio">Actualmente, ¿cuál es la razón principal por la que no asiste a la escuela, colegio o universidad? <span style="color:red;">*</span></label>
                <select name="razest" class="form-control" style="text-transform:uppercase;">
					<option value = 0> Seleccione una opción </option>
					<?php 
						for ($i=0; $i < count($razest); $i++){
					?>
					<option value ="<?php echo $razest[$i]['codval'] ?>" ><?php echo $razest[$i]['nomval'] ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
			
			
		</div>
        <div class="row">
		
            <div class="form-group col-md-6">
                <label for="Terminacion estudio">¿…terminó el año escolar anterior? <span style="color:red;">*</span></label>
                <select name="terest" class="form-control" style="text-transform:uppercase;">
					<option value = 0> Seleccione una opción </option>
					<?php 
						for ($i=0; $i < count($terest); $i++){
					?>
					<option value ="<?php echo $terest[$i]['codval'] ?>" ><?php echo $terest[$i]['nomval'] ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
			
			
			
			
			
		</div>
		
		<div class="col-md-12">
			<a href="home.php?var=56&id=<?php echo $dato1[0]['numdocper'] ?>" class="btn btn-primary">Datos academicos</a>
			
	</div>
		