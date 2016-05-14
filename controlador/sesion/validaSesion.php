<?php
	session_start(); 
	include '../../modelo/sesion/validaSesionModel.php';
	$sesionModelo = new SesionModelo();
	$perNatural = "persona natural";
	$fundacion = "fundacion";

	$usuario = $_POST['usuario'];
	$password = $_POST['contrasena'];

	$resultado = $sesionModelo->consulta_usuario($usuario, $password);
	$resultado2 = $sesionModelo->consulta_tipoUsuario($usuario, $password);
	
	if((($resultado == $usuario) && ($perNatural == $resultado2)) || (($resultado == $usuario) && ($fundacion == $resultado2)))
	{
		$_SESSION['usuario'] = $resultado; 
		$_SESSION['tipo'] = $resultado2;
		date_default_timezone_set("America/Bogota");
		$_SESSION["ultimo_acceso"]= date("Y-n-j H:i:s");				
		echo '<script> window.location="../../vista/logueado/inicio.php"; </script>';
	}
	else
	{
		$mensaje = "El nombre de Usario o Contraseña son incorrectas";
		//echo $mensaje;
		echo '<script> window.location="../../vista/index.php"; </script>';	 	
	}
?>	