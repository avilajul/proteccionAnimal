<?php
include('../../bd/conexion.php');

class AnuncioModelo
{
	private $bd ;

	function AnuncioModelo()
	{
		$this->bd = new BaseDatos();
	 	$this->bd->conectar();
	}

	function nuevo_anuncio($idUsuario, $titulo, $descripcion, $fechaEvento, $foto)
	{	
		$sql = "INSERT INTO anuncio (idAnuncio, idUsuario, titulo, descripcion, fechaEvento,foto)
		VALUES (NULL, '".$idUsuario."','".$titulo."', '".$descripcion."', '".$fechaEvento."', '".$foto."');";
		$result = $this->bd->ejecutar($sql);
		$this->bd->desconectar();
 	}

 	function verAnuncios()
 	{
 		$sql = "SELECT * FROM anuncio WHERE idAnuncio = 2";
 		
 		$result = $this->bd->ejecutar($sql);

		while($registro = mysql_fetch_assoc($result))
		{
			
			return $registros[]= $registro;			

		}		
		$this->bd->desconectar();
		return $registros; 		
 	}
}