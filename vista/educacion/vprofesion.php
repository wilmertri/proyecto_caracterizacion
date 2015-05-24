<?php
	include ("controlador/cprofesion.php");

?>

<h1>Ingresar Profesion</h1>
<div class="forms">
    <form name="form1" action="home.php?var=101" method="post">
	
		<div class="row">
            <div class="form-group">
                <label for="Nombre Profesion">Profesión </label>
                <input name="nomprof" type="text" class="form-control">
            </div>
			
		</div>
		
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Enviar">
				<a href="home.php" class="btn btn-success" >Salir</a>
            </div>
			
	</div>
		