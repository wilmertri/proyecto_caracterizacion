    <?php 
    	$perfil = isset($_SESSION['perfil']) ? $_SESSION['perfil'] : NULL;
    	$nombre = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : NULL; 
	?>
    <div id="sidebar-dropdown">			
		<ul class="nav nav-pills nav-stacked">
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">
				Persona<span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
					<li><a href="home.php?var=2">Insertar persona</a></li>
					<li><a href="home.php?var=3">Listado personas</a></li>
				</ul>
			</li>
			<?php if ($perfil=='Administrador'): ?>
			 	
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Ubicacion<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="home.php?var=24">Insertar vereda</a></li>
					<li><a href="home.php?var=26">Insertar zona</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Salud<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="home.php?var=12">Insertar EPS</a></li>
					<li><a href="home.php?var=32">Insertar Tipo de discapacidad</a></li>
					<li><a href="home.php?var=34">Insertar Clase de discapacidad</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Varios<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="home.php?var=12">Insertar EPS</a></li>
					<li><a href="home.php?var=20">Insertar Servicio publico</a></li>
					<li><a href="home.php?var=22">Insertar Tipo ingreso</a></li>
					<li><a href="home.php?var=30">Insertar factores de permanencia</a></li>

					<!--<li><a href="home.php?var=40">Insertar valor parametro</a></li>-->
				</ul>
			</li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Usuario<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="home.php?var=50">Insertar Usuario</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Parametro<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="home.php?var=40">Insertar Parametro</a></li>
					<li><a href="home.php?var=43">Insertar Valor</a></li>
				</ul>
			</li>
			<?php endif ?> 
		</ul>
		<div id="presen">				
			<strong>Bienvenido: <br> <?= $perfil ?></strong>
			<br>
			<strong><?= $nombre; ?></strong>
		</div>
    </div>  


