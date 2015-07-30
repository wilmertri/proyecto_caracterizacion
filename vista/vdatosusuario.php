<?php

		/*  
        *   @author: Luis M Morales B
        *   @Version: V2 12/05/15
        Check 17, 24			
        */

	include("controlador/cdatosvivienda.php");  
?>
<div class="forms1">
	<h1>Ingresar datos de la vivienda</h1>
	<form name="form1" action="" method="POST">
		<div class="row">
			<div class="form-group col-lg-6">
				<label for="" class="">tipodocumento</label>
				<select name="docusu" class="form-control" id="">  
					<option value="">Ingrese documento</option>
					<?php

						for ($i=0; $i <count($tipodocumento1) ; $i++) 
						{  
					?>
					<option value="<?php echo $tipodocumento1[$i]['codval']; ?>"><?php echo $tipodocumento1[$i]['docusu']; ?></option>
					<?php 
						} 
					?>
				</select>		
			</div>
			<div class="form-group col-lg-6">
				<label for="" class="">usuario</label>
				<select name="usuusu" class="form-control" id="">
					<option value="">ingrese el usuario</option>
					<?php

						for ($i=0; $i <count($usuario) ; $i++) 
						{  
					?>
					<option value="<?php echo $usuario[$i]['codval']; ?>"><?php echo $usuario[$i]['usuusu']; ?></option>
					<?php 
						} 
					?>
				</select>		
			</div>
		</div>
		<div class="row">
			<div class="form-group col-lg-6">
				<label for="" class="">email</label>
				<select name="emausu" class="form-control" id="">
					<option value="">ingrese email</option>
					<?php

						for ($i=0; $i <count($email) ; $i++) 
						{  
					?>
					<option value="<?php echo $email[$i]['codval']; ?>"><?php echo $email[$i]['nomval']; ?></option>
					<?php 
						} 
					?>
				</select>		
			</div>
			<div class="form-group col-lg-6">
				<label for="" class="">password</label>
				<select name="pasusu" class="form-control" id="">
					<option value="">ingrese su contraseña</option>
					<?php

						for ($i=0; $i <count($password) ; $i++) 
						{  
					?>
					<option value="<?php echo $tipotechos[$i]['codval']; ?>"><?php echo $password[$i]['nomval']; ?></option>
					<?php 
						} 
					?>
				</select>		
			</div>
		</div>		
		<div class="row">
			<div class="form-group col-lg-6">
				<input type="submit" class="btn btn-success">
			</div>	
		</div>
		
	</form>
</div>