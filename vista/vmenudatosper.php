<?php include("controlador/cdatosper.php"); ?>
<div class="forms1">
	<h2>FICHA DE CARACTERIZACIÓN: <?= $datos[0]['numficha']; ?></h2>
	<h3>NÚMERO DE IDENTIFICACIÓN: <?= $datos[0]['numdocper']; ?></h3>
	<div class="dropdown esp">
		<a href="#" class="btn btn-success dropdown-toggle" data-toggle="dropdown">DATOS DEL REPRESENTANTE DEL HOGAR <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="home.php?var=4&id=<?= $id;?>">MOSTRAR DATOS</a></li>
			<li><a href="home.php?var=2&id=<?= $id;?>">INGRESAR DATOS</a></li>
		</ul>
	</div>
	<div class="dropdown esp">
		<a href="#" class="btn btn-success dropdown-toggle" data-toggle="dropdown">EDUCACIÓN <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="home.php?var=101&id=<?= $id;?>">MOSTRAR DATOS</a></li>
			<li><a href="home.php?var=100&id=<?= $id;?>">INGRESAR DATOS</a></li>
		</ul>
	</div>
	<div class="dropdown esp">
		<a href="#" class="btn btn-success dropdown-toggle" data-toggle="dropdown">SALUD <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="home.php?var=56&id=<?= $id;?>">MOSTRAR DATOS</a></li>
			<li><a href="home.php?var=55&id=<?= $id;?>">INGRESAR DATOS</a></li>
		</ul>
	</div>
	<div class="dropdown esp">
		<a href="#" class="btn btn-success dropdown-toggle" data-toggle="dropdown">DATOS DE LA VIVIENDA <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="home.php?var=76&id=<?= $id;?>">MOSTRAR DATOS</a></li>
			<li><a href="home.php?var=75&id=<?= $id;?>">INGRESAR DATOS</a></li>
		</ul>
	</div>
	<div class="dropdown esp">
		<a href="#" class="btn btn-success dropdown-toggle" data-toggle="dropdown">ACTIVIDAD ECONÓMICA <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="home.php?var=91&id=<?= $id;?>">MOSTRAR DATOS</a></li>
			<li><a href="home.php?var=90&id=<?= $id;?>">INGRESAR DATOS</a></li>
		</ul>
	</div>
	<div class="dropdown esp">
		<a href="#" class="btn btn-success dropdown-toggle" data-toggle="dropdown">DESPOJO Y ABANDONO DE TIERRAS <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="home.php?var=96&id=<?= $id;?>">MOSTRAR DATOS</a></li>
			<li><a href="home.php?var=95&id=<?= $id;?>">INGRESAR DATOS</a></li>
		</ul>
	</div>
	<div class="dropdown esp">
		<a href="#" class="btn btn-success dropdown-toggle" data-toggle="dropdown">COMPOSICIÓN FAMILIAR <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="home.php?var=8&id=<?= $id;?>">MOSTRAR DATOS</a></li>
			<li><a href="home.php?var=6&id=<?= $id;?>">INGRESAR DATOS</a></li>
		</ul>
	</div>
</div>