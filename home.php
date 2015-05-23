<?php   //include("modelo/mseguridad.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>Proyecto caracterización población desplazada</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/miestilo.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
    <style type="text/css" class="init">
    </style>
    <script type="text/javascript" language="javascript" src="js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
    <script type="text/javascript" language="javascript" class="init">
      $(document).ready(function() {
        $('#example').DataTable();
      } );
    </script>
    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

  <!-- Código para la barra de navegación de la parte superior.  -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <a class="navbar-brand" href="#ppal">
				      Alcaldia de Chía<br> Sistema de caracterización
				    </a>
               <div class="navbar-header">
			   <div id="logo">
                <img src="img/logo.png" width="40px" alt="Alcaldia Municipal de Chía">
			    </div>				
            </div>

            <!--Este código muestra la barra de navegación de la derecha. -->
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#sec1">Nosotros</a>
                    </li>
                    <li>
                        <a href="#sec2">Nuestros Servicios</a>
                    </li>
                    <li>
                        <a href="#">Contactenos</a>
                    </li>
                    <li>
                        <a href="vista/salir.php">Salir</a>
                    </li>
                </ul>
        </div>
    </nav>
    <?php
        $variable = isset($_GET['var']) ? $_GET['var']:NULL;
    ?>

    <?php
      include("menu.php");
    ?>
    <div id="contenido">               
      
    <?php
      if ($variable==null) {
    ?>
    <div class="plantilla2">
      <?php
          include("vista/vlistadatosper.php");
      ?>
    </div>
    <?php
      }
      else
      {
    ?>             
    <div class="plantilla1">    
      <?php
          if ($variable==2) {
              include("vista/datospersona/vdatospersona.php");
          }
          if ($variable==3) {
              include("vista/vlistadatosper.php");
          }
          if ($variable==4) {
              include("vista/datospersona/vdetalleper.php");
          }
          if ($variable==5) {
              include("vista/datospersona/veditarper.php");
          }
          if ($variable==6) {
              include("vista/composicionfamiliar/vdatosfam.php");
          }
          if ($variable==7) {
              include("vista/composicionfamiliar/vdatosfam1.php");
          }
          if ($variable==8) {
              include("vista/composicionfamiliar/vdetallefamper.php");
          }
          if ($variable==9) {
              include("vista/veditarfamper.php");
          }
          if ($variable==10) {
              include("vista/vtbcapacitacion.php");
          }
          if ($variable==11) {
              include("vista/vtbcapacitacion1.php");
          }
          if ($variable==12) {
              include("vista/vtbeps.php");
          }
          if ($variable==13) {
              include("vista/vtbeps1.php");
          }
          if ($variable==14) {
              include("vista/actividadeconomica/vexplaboral.php");
          }
          if ($variable==15) {
              include("vista/actividadeconomica/vexplaboral1.php");
          }
          if ($variable==16) {
              include("vista/actividadeconomica/vingresoext.php");
          }
          if ($variable==17) {
              include("vista/actividadeconomica/vingresoext1.php");
          }
          if ($variable==18) {
              include("vista/actividadeconomica/vtbnegocio.php");
          }
          if ($variable==19) {
              include("vista/actividadeconomica/vtbnegocio1.php");
          }
          if ($variable==20) {
              include("vista/vservibas.php");
          }
		      if ($variable==21) {
              include("vista/vservibas1.php");
          }
          if ($variable==22) {
              include("vista/actividadeconomica/vtipoingreso.php");
          }
          if ($variable==23) {
              include("vista/actividadeconomica/vtipoingreso1.php");
          }
          if ($variable==24) {
              include("vista/vtbvereda.php");
          }
		      if ($variable==25) {
              include("vista/vtbvereda1.php");
          }
          if ($variable==26) {
              include("vista/vtbzona.php");
          }
          if ($variable==27) {
              include("vista/vtbzona1.php");
          }
		      if ($variable==28) {
              include("vista/vtbhechosvict.php");
          }
		      if ($variable==29) {
              include("vista/vtbhechosvict1.php");
          }
          if ($variable==30) {
              include("vista/vtbfactoresvict.php");
          }
          if ($variable==31) {
              include("vista/vtbfactoresvict1.php");
          }
          if ($variable==32) {
              include("vista/vdiscapacidad.php");
          }
          if ($variable==33) {
              include("vista/vdiscapacidad1.php");
          }
          if ($variable==34) {
              include("vista/vclasediscapacidad.php");
          }
          if ($variable==35) {
              include("vista/vclasediscapacidad1.php");
          }
          if ($variable==36) {
              include("vista/vdiscper.php");
          }
		      if ($variable==40) {
              include("vista/vparametro.php");
          }
		      if ($variable==41) {
              include("vista/vparametro1.php");
          }
          if ($variable==42) {
              include("vista/vactuvalor.php");   
          }
          if ($variable==43) {
              include("vista/vvalor.php");   
          }
          if ($variable==50) {
              include("vista/usuario/vusuario.php");
          }
          if ($variable==51) {
              include("vista/usuario/vediusuario.php");
          }
          if ($variable==55) {
              include("vista/vtbsalud.php");
          }
          if ($variable==70) {
              include("vista/vmenudatosper.php");
          }
          if ($variable==75) {
              include("vista/vdatosvivienda.php");
          }
          if ($variable==76) {
              include("vista/vverdatosvivienda.php");
          }
          if ($variable==85) {
              //Luis Miguel se cambio por el 50 al 55
          }
          if ($variable==90) {
              //Jorge
			  include("vista/actividadeconomica/vactividadeconomica.php");
          }
		   if ($variable==91) {
			  include("vista/actividadeconomica/vdatosactividadeconomica.php");
          }
		  if ($variable==92) {
			  include("vista/actividadeconomica/vingreso.php");
          }
		  if ($variable==93) {
			  include("vista/actividadeconomica/vingreso1.php");
          }
          if ($variable==95) 
  		    {
                //Andrea
  			      include("vista/vdespyaban.php");
          }
          if ($variable==100) 
          {
              //Jhon Edison
			        include("vista/veducacion.php");
          }
		      if ($variable==101) 
          {
              include("vista/vdatosacademicos.php");
          }
      ?>  
    </div>                                                
    
    <?php
        }
    ?>
  </div>
	<!-- /#sidebar-wrapper -->
	<!-- End Page Content -->
	        
	<?php
    include("pie.php");
  ?>
	
	
    <!-- Bootstrap Core JavaScript -->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
	   
</body>

</html>
