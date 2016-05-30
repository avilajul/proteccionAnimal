<?php
include('../../bd/conexion.php');

class UsuarioModelo 
{
	private $bd ;

	function UsuarioModelo()
	{
		$this->bd = new BaseDatos();
	 	$this->bd->conectar();
	}

	function nuevo_usuario ($nick, $passw, $nom, $dir, $tel, $ciudad, $tipoU )
	{
		$sql = "INSERT INTO usuario (nickname, password, nombre, direccion, telefono, ciudad, tipoUsuario)
          VALUES ('".$nick."', '".$passw."','".$nom."', '".$dir."', '".$tel."', '".$ciudad."', '".$tipoU."')";

		$result = $this->bd->ejecutar($sql);
 	}
}

?>	
