<?php
	include ("controlador/ctbsalud.php");
?>
<div class="forms1">
	<h1>Ingresar Datos Salud </h1>
	<form name="form1" method="POST" action="">

		<!-- Esta afiliado a algún Sistema de Salud. -->
		<input type="hidden" name="actu" value="actu" /> 
		<div class="row">
			<div class="form-group col-lg-6">
				<label for="">Sistema de Salud</label>
                <select name="sissal" class="form-control" id="">
                	<option value="">Seleccione Sistema de Salud</option>
					<?php 
						for ($i=0; $i < count($sissal); $i++)
						{
					?>
					<option value ="<?php echo $sissal[$i]['codval'] ?>" ><?php echo $sissal[$i]['nomval']; ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
           	<!-- Qué Entidad Promotora de Salud le presta los servcios de salud? -->
          	<div class="form-group col-lg-6">
          		<label for="">EPS</label>
                <select name="eps" class="form-control" id="">
					<option value="">Seleccione Entidad Promotora de Salud</option>
					<?php 
						for ($i=0; $i < count($eps); $i++){
					?>
					<option value ="<?php echo $eps[$i]['codeps'] ?>" ><?php echo $eps[$i]['nomeps']; ?></option>
					<?php 
						} 
					?>
				</select>
        	</div>
		</div>
		<!-- En los últimos doce meses, ¿le han negado la atención en salud?  PV -->
		<div class="row">
			<div class="form-group col-md-6">
                <label for="">Le han negado atención?</label>
                <select name="negser" class="form-control">
					<option value="" >Seleccione una opcion</option>
					<?php 
						for ($i=0; $i < count($negser); $i++)
						{
					?>
					<option value ="<?php echo $negser[$i]['codval'] ?>" ><?php echo $negser[$i]['nomval']; ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
            <!-- Alguna vez solicitó atención en salud (psicológica o física) despues de haber declarado el hecho victimizante? PV -->
        	<div class="form-group col-md-6">
                <label for="">Ha solicitado atención médica?</label>
                <select name="atevicper" class="form-control" id="">
					<option value="">Seleccione una opcion</option>
					<?php 
						for ($i=0; $i < count($atevicper); $i++)
						{
					?>
					<option value ="<?php echo $atevicper[$i]['codval'] ?>" ><?php echo $atevicper[$i]['nomval']; ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
        </div>	
		<!-- Cuenta con el esquema de vacunación los niños(as) menores de 6 años del Hogar. PV -->
		<div class="row">
			<div class="form-group col-md-6">
                <label for="">Tiene esquema de Vacunación?</label>
                <select name="esqvacper" class="form-control">
					<option value="">Seleccione una opcion</option>
					<?php 
						for ($i=0; $i < count($esqvacper); $i++)
						{
					?>
					<option value ="<?php echo $esqvacper[$i]['codval'] ?>" ><?php echo $esqvacper[$i]['nomval']; ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
        	<!-- En el ultimo año ha estado en control odontológico? PV -->
        	<div class="form-group col-md-6">
                <label for="">Ha estado en control odontologico?</label>
                <select name="conodoper" class="form-control">
					<option value="">Seleccione una Opcion</option>
					<?php 
						for ($i=0; $i < count($conodoper); $i++)
						{
					?>
					<option value ="<?php echo $conodoper[$i]['codval'] ?>" ><?php echo $conodoper[$i]['nomval']; ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
        </div>  

        <div class="row">
            <!-- La discapacidad fue causada por el conflicto armado? -->
        	<div class="form-group col-md-6">
                <label for="">Discapacidad causada conflicto armado?</label>
                <select name="disconfarm" class="form-control">
					<option value="">Seleccione una Opcion</option>
					<?php 
						for ($i=0; $i < count($disconfarm); $i++)
						{
					?>
					<option value ="<?php echo $disconfarm[$i]['codval'] ?>" ><?php echo $disconfarm[$i]['nomval']; ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
            <!-- Cuantos alimentos consume su hogar en el día normalmente? -->
        	<div class="form-group col-md-6">
                <label for="Sistema de Salud">Número alimentos diarios</label>
                <select name="comdiaper" class="form-control">
					<option value = 0> Seleccione una opcion </option>
					<?php 
						for ($i=0; $i < count($comdiaper); $i++){
					?>
					<option value ="<?php echo $comdiaper[$i]['codval'] ?>" ><?php echo $comdiaper[$i]['nomval'] ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
        </div>
        <div class="row">
			<div class="form-group col-md-12 center" >
				<input type="submit" class="btn btn-success" value="Enviar">
				<a href="home.php?id=<?= $a_id ?>&var=70" class="btn btn-success">Volver</a>
				<a href="home.php" class="btn btn-success" >Salir</a>
			</div>
		</div>
	</form>
</div>