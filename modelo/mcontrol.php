<?php
	include("../controlador/conexion.php");
	session_start();
	$usu = $_POST['documento'];
	$pass = sha1($_POST['password']);

	verper($usu,$pass);

	function verper($usu,$pass)
	{
		$c = "SELECT * FROM tbusuario WHERE documento ='".$usu."' AND password = '".$pass."';";
		$conexionBD = new conexion();
		$conexionBD -> conectarBD();
		$datos = $conexionBD -> ejeCon($c,0);

		$contdat = count($datos);
		//echo $datos[0]['nomusu'];

		if ($contdat == 1) 
		{
			$_SESSION["usuario"] = $datos[0]['nombre'];
			$_SESSION["idUsuario"] = $datos[0]['documento'];
			$_SESSION["perfil"] = $datos[0]['perfil'];
			$_SESSION["autenticado"] = 10;
			echo "<script type='text/javascript'>window.location='../home.php';</script>";
		}
		else
		{
			echo "<script type='text/javascript'>window.location='../index.php?errorusuario=si';</script>";
		}
	}
?>