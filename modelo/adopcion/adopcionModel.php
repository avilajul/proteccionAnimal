<?php
$nombre_archivo= $_POST['archivo'];
if ($nombre_archivo=='visitanteVerAdopcion'){
require('../bd/conexion.php');	
}
else{
require('../../bd/conexion.php');	
}

class AdopcionModelo 
{
	private $bd ;

	function AdopcionModelo()
	{
		$this->bd = new BaseDatos();
	 	$this->bd->conectar();
	}

	function nueva_adopcion ($tipo, $nom, $gen, $color, $raza, $tamaño, $edad, $descr, $contacto, $foto )
	{	
		$sql = "INSERT INTO adopcion (idAdopcion, tipoAnimal, nombre, genero, color, raza, tamano, edad, descripcion, contacto, foto)
		VALUES (NULL, '".$tipo."','".$nom."', '".$gen."', '".$color."', '".$raza."', '".$tamaño."', '".$edad."', '".$descr."', '".$contacto."', '".$foto."');";
		$result = $this->bd->ejecutar($sql);
 	}

 	function verAdopcion()
 	{
 		//$registros[];
 		
 		$sql = "SELECT * FROM adopcion WHERE idAdopcion = 10";
 		
 		$result = $this->bd->ejecutar($sql);

		while($registro = mysql_fetch_assoc($result))
		{
			
			return $registros[]= $registro;			

		}		
		$this->bd->desconectar();
		return $registros;
 		
 	}
}