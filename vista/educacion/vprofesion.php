<?php
	include ("controlador/cprofesion.php");

?>

<h1>Ingresar Profesion</h1>
<div class="forms">
    <form name="form1" action="home.php?var=101" method="post">
	
		<div class="row">
            <div class="form-group">
                <label for="Nombre Profesion">Profesión <span style="color:red;">*</span></label>
                <input name="nomprof" type="text" class="form-control">
            </div>
			
			<div class="form-group col-md-6 center">
                <label for="Titulo Obtenido">Titulo Obtenido <span style="color:red;">*</span></label>
                <select name="titobtper" class="form-control" style="text-transform:uppercase;">
				<option value=0> Seleccione una opción </option>
					<?php 
						for ($i=0; $i < count($titobtper); $i++){
					?>
					<option value ="<?php echo $titobtper[$i]['idprofesion'] ?>" ><?php echo $titobtper[$i]['nombreprof'] ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
		</div>
		<div class="row">
		
            <div class="form-group col-md-6">
                <label for="Matriculado">¿Actualmente está matriculado(a)? <span style="color:red;">*</span></label>
                <select name="matriper" class="form-control" style="text-transform:uppercase;">
					<option value = 0> Seleccione una opción </option>
					<?php 
						for ($i=0; $i < count($matriper); $i++){
					?>
					<option value ="<?php echo $matriper[$i]['codval'] ?>" ><?php echo $matriper[$i]['nomval'] ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
			
			
			
			<div class="form-group col-md-6">
                <label for="Razon no estudio">Actualmente, ¿cuál es la razón principal por la que no asiste a la escuela, colegio o universidad? <span style="color:red;">*</span></label>
                <select name="nomatriper" class="form-control" style="text-transform:uppercase;">
					<option value = 0> Seleccione una opción </option>
					<?php 
						for ($i=0; $i < count($nomatriper); $i++){
					?>
					<option value ="<?php echo $nomatriper[$i]['idtbopcionnomatricula'] ?>" ><?php echo $nomatriper[$i]['opcion'] ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
			
			
		</div>
        <div class="row">
		
            <div class="form-group col-md-6">
                <label for="Terminacion estudio">¿…terminó el año escolar anterior? <span style="color:red;">*</span></label>
                <select name="termcurant" class="form-control" style="text-transform:uppercase;">
					<option value = 0> Seleccione una opción </option>
					<?php 
						for ($i=0; $i < count($termcurant); $i++){
					?>
					<option value ="<?php echo $termcurant[$i]['codval'] ?>" ><?php echo $termcurant[$i]['nomval'] ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
			
			
			
			
			
		</div>
		
		<div class="col-md-12">
			<a href="home.php?var=101&pr=<?php echo $dato1[0]['numdocper'] ?>" class="btn btn-primary">Datos academicos</a>
			<a href="home.php?var=70&pr=<?php echo $dato1[0]['numdocper'] ?>" class="btn btn-primary">Volver Menu Principal</a>
			
	</div>
		