<?php
include('../../bd/conexion.php');

class SesionModelo 
{
	private $bd;

	function SesionModelo()
	{
		$this->bd = new BaseDatos();
	 	
	}

	function consulta_usuario ($usuario, $password)
	{
		$sql = "SELECT * FROM usuario WHERE nickname='".$usuario."' and password='".$password."'";
		$this->bd->conectar();

		$result = $this->bd->ejecutar($sql);

		if($registro = mysql_fetch_assoc($result))
		{
			
			return $usuario = $registro['nickname'];			

		}
		else
		{
			return $usuario = "";

		}
		$this->bd->desconectar();
 	}

	function consulta_tipoUsuario ($usuario, $password)
	{
		$sql = "SELECT tipoUsuario FROM usuario WHERE nickname='".$usuario."' and password='".$password."'";
		$this->bd->conectar();

		$result = $this->bd->ejecutar($sql);

		if($registro = mysql_fetch_assoc($result))
		{
			
			return $tipoUsuario = $registro['tipoUsuario'];			

		}
		else
		{
			return $tipoUsuario = "";

		}
		$this->bd->desconectar();
 	} 	
}

?>	
