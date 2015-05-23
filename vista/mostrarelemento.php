<!DOCTYPE html>
<html>
	<head>
		<title>Mostrar elementos con javascript</title>
		<script type="text/javascript">
			function mostrar(val){
				if (document.getElementById){ //se obtiene el id
					var el = document.getElementById('mostra'); //se define la variable "el" igual a nuestro div
					el.style.display = 'none';
					if (val=='2'){
						el.style.display = 'block';
					}else{
						el.style.display = 'none';
					}
				}
			};
			function mostrar2(val){
				if (document.getElementById){ //se obtiene el id
					var el1 = document.getElementById('mostra2'); //se define la variable "el" igual a nuestro div
					el1.style.display = 'none';
					if (val=='1'){
						el1.style.display = 'block';
					}else{
						el1.style.display = 'none';
					}
				}
			};
		</script>		
	</head>
	<body>
		<h1>Mostrar u ocultar elementons con JS</h1>
		<div class="forms">
			<label>Seleccione opcion: </label>	
			<select name="ok" onchange="javascript:mostrar(this.value);" class="form-control">
				<option>1</option>
	    		<option>2</option>
	    		<option>3</option>
	    		<option>4</option>
	    		<option>5</option>
			</select>
			<br>
			<div id="mostra">
				<select name="prueba1" onchange="javascript:mostrar2(this.value);" class="form-control">
					<option value="1">Uno</option>
					<option value="2">Dos</option>
					<option value="3">Dos</option>
					<option value="4">Dos</option>
					<option value="5">Dos</option>
					<option value="6">Dos</option>
				</select>
			</div>
			<br>
			<div id="mostra2">
				<select name="prueba2" class="form-control">
					<option>Rojo</option>
					<option>Azul</option>
					<option>Verde</option>
					<option>Amarillo</option>
					<option>Violeta</option>
				</select>
			</div>
		</div>
		<br>
		<p class="lead">Este ejemplo muestra como podemos ocultar elementos HTML con javascript, 
			el segundo desplegable aparece unicamente cuando se escoje la opcion dos del primer desplegable y 
			el tecer desplegable cuando escojemos solamente la primera opcion del tercer desplegable.
		</p>	
	</body>
</html>
