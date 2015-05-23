<?php
	include("../controlador/cestrato.php");
?>
<form name"FormPer" method="POST" action="" id="formu">
		<div class="form-group"> 
			<h2>Consulta Estrato</h2>
		</div>
		<div class="form-group">		
			<label for="Codigo catastral" class="control-label">Por favor ingrese su cédula catastral: </label>
			<input name="codcas" type="text" class="form-control"><br>
			<label for="Informacion" class="control-label">Ejemplo: 000000044458000</label>
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-primary" value="Consultar">
		</div>
	</form>
	</center>
	<div align="center">
	<form name="PDF" method="POST" action=""  class="consest">	
	<?php
		if ($codcas) 
		{
			if($dat)
			{
	?> 
	    		<table width="800px" cellspacing="0" cellpadding="4" class="table table-bordered">
			    	<thead>
			          <tr>
			            <th align="center" width="50">CODIGO CATASTRAL</th>
			            <th align="center" width="30">ESTRATO</th>
			            <th align="center" width="150">DIRECCION</th>
			            <th align="center" width="70">DESCARGAR</th>
			            <input name="cod" type="hidden" value="<?php echo $dat[0]['codigocatastral'] ?>" />
			          </tr>
	      		</thead>
	<?php 
		 	//Select
				
				for ($i=0; $i < count($dat); $i++){
			  ?>
		        <tbody>
		            <tr class="info">		                
		                <td align="left" width="50"><?php echo $dat[$i]['codcas'] ?></td>
		                <td align="center" width="30"><?php echo $dat[$i]['numestrato'] ?></td>
		                <td align="left" width="150"><?php echo $dat[$i]['dirpred'] ?></td>
		                <td align="center"><a href="docestrato.php?ca=<?php echo $dat[$i]['codcas'] ?>" target="_blank"><img border=0 src="../img/pdf.png" width="40" height="40" /></a></td>
		            </tr>

		          <?php  }  ?>
		        </tbody>    
		    </table>
		    <br><br>
	<?php
			}
			else
			{
				echo "Cedula catastral no encontrada";
	?>			
				<br><a href="docestrato1.php?ca=<?php echo $codcas; ?>" target="_blank" class="btn btn-success">Descargar</a></td>
	<?php		
			}
		}
	?>
	</form>
	<p>Si usted desea conocer su estratificación ingrese el codigo catastral y haga clic en el boton de consultar, despues de esto descargue su certificado gratuito en formato PDF. Si su predio no aparece en la base de datos de estratificación usted puede descargar la constancia donde se comunica esto y seguir las indicaciones que en ella se presentan.</p>