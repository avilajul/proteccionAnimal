<?php
include('../../bd/conexion.php');

class ExtravioModelo 
{
	private $bd ;

	function ExtravioModelo()
	{
		$this->bd = new BaseDatos();
	 	$this->bd->conectar();
	}

	function nuevo_extravio ($tipo, $lugarEx, $nom, $gen, $color, $raza, $tamaño, $edad, $descr, $contacto, $foto)
	{
		$sql = "INSERT INTO extraviado (idExtraviado,tipoAnimal,lugarExtraviado, nombre, genero, color, raza, tamano, edad, descripcion, contacto, foto)
          VALUES (NULL, '".$tipo."','".$lugarEx."', '".$nom."', '".$gen."', '".$color."', '".$raza."', '".$tamaño."', '".$edad."', '".$descr."', '".$contacto."', '".$foto."')";

//         $sql = "INSERT INTO extraviado (idExtraviado,tipoAnimal,lugarExtraviado, nombre, genero, color, raza, tamano, edad, descripcion, contacto, foto)
   //       VALUES (NULL, '2','XXXXXXX.', 'ASJLKJKL', 'MACHO', 'BLANCO', 'LABRADOR', 'GRANDE', '2', 'NADA', 'TEL KFSJAKLSFJKL', 'PERRO.JPG')";
		$result = $this->bd->ejecutar($sql);
 	}
}
?>	