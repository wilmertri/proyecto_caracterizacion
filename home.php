<?php  include("modelo/mseguridad.php"); ?>
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
          if ($variable==2) 
          {
              include("vista/datospersona/vdatospersona.php");
          }
          elseif ($variable==3) 
          {
              include("vista/vlistadatosper.php");
          }
          elseif ($variable==4) 
          {
              include("vista/datospersona/vdetalleper.php");
          }
          elseif ($variable==5) 
          {
              include("vista/datospersona/veditarper.php");
          }
          elseif ($variable==6) 
          {
              include("vista/composicionfamiliar/vdatosfam.php");
          }
          elseif ($variable==7) 
          {
              include("vista/composicionfamiliar/vdatosfam1.php");
          }
          elseif ($variable==8) 
          {
              include("vista/composicionfamiliar/vdetallefamper.php");
          }
          elseif ($variable==10) 
          {
              include("vista/educacion/vtbcapacitacion.php");
          }
          elseif ($variable==11) 
          {
              include("vista/educacion/vtbcapacitacion1.php");
          }
          elseif ($variable==12) 
          {
              include("vista/vtbeps.php");
          }
          elseif ($variable==13) 
          {
              include("vista/vtbeps1.php");
          }
          elseif ($variable==14) 
          {
              include("vista/actividadeconomica/vexplaboral.php");
          }
          elseif ($variable==15) 
          {
              include("vista/actividadeconomica/vexplaboral1.php");
          }
          elseif ($variable==16) 
          {
              include("vista/actividadeconomica/vingresoext.php");
          }
          elseif ($variable==17) 
          {
              include("vista/actividadeconomica/vingresoext1.php");
          }
          elseif ($variable==18) 
          {
              include("vista/actividadeconomica/vtbnegocio.php");
          }
          elseif ($variable==19) 
          {
              include("vista/actividadeconomica/vtbnegocio1.php");
          }
          elseif ($variable==20) 
          {
              include("vista/vservibas.php");
          }
		      elseif ($variable==21) 
          {
              include("vista/vservibas1.php");
          }
          elseif ($variable==22) 
          {
              include("vista/actividadeconomica/vtipoingreso.php");
          }
          elseif ($variable==23) 
          {
              include("vista/actividadeconomica/vtipoingreso1.php");
          }
          elseif ($variable==24) 
          {
              include("vista/vtbvereda.php");
          }
		      elseif ($variable==25) 
          {
              include("vista/vtbvereda1.php");
          }
          elseif ($variable==26) 
          {
              include("vista/vtbzona.php");
          }
          elseif ($variable==27) 
          {
              include("vista/vtbzona1.php");
          }
          elseif ($variable==30) 
          {
              include("vista/despojoyabandono/vfactoresperm.php");
          }
          elseif ($variable==31) 
          {
              include("vista/despojoyabandono/vfactxidper.php");
          }
          elseif ($variable==32) 
          {
              include("vista/salud/discapacidad/vcreate_type_discapacidad.php");
          }
          elseif ($variable==33) 
          {
              include("vista/salud/discapacidad/vedit_type_discapacidad.php");
          }
          elseif ($variable==34) 
          {
              include("vista/salud/discapacidad/vcreate_class_discapacidad.php");
          }
          elseif ($variable==35) 
          {
              include("vista/salud/discapacidad/vedit_class_discapacidad.php");
          }
          elseif ($variable==36) 
          {
              include("vista/salud/discapacidad/vcreate_disc_per.php");
          }
          elseif ($variable==37) 
          {
              include("vista/salud/discapacidad/vedit_disc_per.php");
          }
		      elseif ($variable==40) 
          {
              include("vista/vparametro.php");
          }
		      elseif ($variable==41) 
          {
              include("vista/vparametro1.php");
          }
          elseif ($variable==42) 
          {
              include("vista/vactuvalor.php");   
          }
          elseif ($variable==43) 
          {
              include("vista/vvalor.php");   
          }
          elseif ($variable==50) 
          {
              include("vista/usuario/vusuario.php");
          }
          elseif ($variable==51) 
          {
              include("vista/usuario/vediusuario.php");
          }
          elseif ($variable==55) 
          {
              include("vista/salud/vtbsalud.php");
          }
          elseif ($variable==56) 
          {
              include("vista/salud/vconsultatbsalud.php");
          }
          elseif ($variable==70) 
          {
              include("vista/vmenudatosper.php");
          }
          elseif ($variable==75) 
          {
              include("vista/datosvivienda/vdatosvivienda.php");
          }
          elseif ($variable==76) 
          {
             include("vista/datosvivienda/vverdatosvivienda.php");
          }
          elseif ($variable==90) 
          {
              include("vista/actividadeconomica/vactividadeconomica.php");
          }
		      elseif ($variable==91) 
          {
			        include("vista/actividadeconomica/vdatosactividadeconomica.php");
          }
		      elseif ($variable==92) 
          {
			        include("vista/actividadeconomica/vingreso.php");
          }
		      elseif ($variable==93) 
          {
			        include("vista/actividadeconomica/vingreso1.php");
          }
          elseif ($variable==95) 
  		    {
  			      include("vista/despojoyabandono/vdespyaban.php");
          }
          elseif ($variable==96) 
          {
              include("vista/despojoyabandono/vverdespyaban.php");
          }
          elseif ($variable==100) 
          {
              include("vista/educacion/veducacion.php");
          }
				  elseif ($variable==101) 
          {
				      include("vista/educacion/vdatoseducacion.php");
          }
				  elseif ($variable==104) 
          {
				      include("vista/educacion/vprofesion.php");
          }
				  elseif ($variable==105) 
          {
				      include("vista/educacion/vprofesion1.php");
          }
		      elseif ($variable==106) 
          {
				      include("vista/educacion/vtbopcionnomatricula.php");
          }
				  elseif ($variable==107) 
          {
				      include("vista/educacion/vtbopcionnomatricula1.php");
          }
          else
          {
              echo "<h1>Página no encontrada</h1>";
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
