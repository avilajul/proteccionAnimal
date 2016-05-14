<?php
include ('../../modelo/registroUsuario/usuarioModel.php');
$usuarioModelo = new UsuarioModelo();

	 	   $nick = $_POST["nickname"];
	 	   $passw = $_POST["password"];
	 	   $nom = $_POST["nombre"];
	 	   $dir = $_POST["direccion"];
	 	   $tel = $_POST["telefono"];
	 	   $ciudad = $_POST["ciudad"];
	 	   $tipoU = $_POST["tipoUsuario"];
	 	  
	 	  
	 	 $usuarioModelo->nuevo_usuario($nick, $passw, $nom, $dir, $tel, $ciudad, $tipoU);
	 	 echo '<script> window.location="../../vista/index.php"; </script>';
	 	 /*if(!$usuarioModelo)
	 	 {
	 	 	echo '<script> alert("El usuario ya existe.\n\rPor favor intentalo nuevamente");</script>';
			echo '<script> window.location="registro.php"; </script>';
	 	 }
	 	 else
	 	 {
	 	 	echo '<script> alert("Las contraseñas son incorrectas.\n\rPor favor intentalo nuevamente");</script>';
			echo '<script> window.location="registro.php"; </script>';
	 	 }*/
?>
