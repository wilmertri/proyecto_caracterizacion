<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Diseño Bootstrap</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" type="text/css" href="css/miestilo.css">
        <link href="css/simple-sidebar.css" rel="stylesheet">
        <link href="css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <meta charset="utf-8">
    </head>
    <body>
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                    <div class="col-lg-6">
                    <a class="navbar-brand" href="index.php">Alcaldia de Chía<br> Sistema de caracterización</a>
                    <div class="navbar-header">
                                            <div id="logo">
                                    <img src="img/logo.png" width="40px" alt="Alcaldia Municipal de Chía">
                                    </div>				
                    </div>

                </div>	
                <!--Este código muestra la barra de navegación de la derecha. -->
                 <div class="col-lg-6">
                <form class="navbar-form navbar-right" method="POST" action="modelo/mcontrol.php">
                    <div class="form-group">
                        <input name="documento" type="text" placeholder="Documento" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input name="password" type="password" placeholder="Password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-success">Ingresar</button>
                </form>
            </div>   
            </div>
        </nav> 
        <?php
                include("inicio.php");
        ?>
        <?php
                include("pie.php");
        ?>
        <?php
            $erroring = isset($_GET['errorusuario']) ? $_GET['errorusuario']:NULL;
            if(strcmp($erroring, "si")==0)
            {
                echo "<script>alert('Datos incorrectos, verifique e intente de nuevo!')</script>";       
            }
        ?>	
    </body>
</html>