<?php
include('../../bd/conexion.php');

class ConsultaExtravio 
{
	private $bd ;

	function ConsultaExtravio()
	{
		$this->bd = new BaseDatos();
	 	$this->bd->conectar();
	}

	function consulta_extraviado ()
	{
		$sql = "SELECT * FROM extraviado ; 

		$result = $this->bd->ejecutar($sql);
 	}
}
?>		