<?php
include_once ('../../modelo/extraviado/extraviadoModel.php');
$extraviadoModelo = new ExtravioModelo();
	 	   
	 	   $tipo = $_POST["tipoAnimal"];
	 	   $lugarEx = $_POST["lugarExtraviado"];
	 	   $nom = $_POST["nombre"];
	 	   $gen = $_POST["genero"];
	 	   $color = $_POST["color"];
	 	   $raza = $_POST["raza"];
	 	   $tamaño = $_POST["tamano"];
	 	   $edad = $_POST["edad"];
	 	   $descr = $_POST["descripcion"];
	 	   $contacto = $_POST["contacto"];
	 	   $foto = $_POST["foto"];
	 	  
	 	  
	 	 $extraviadoModelo->nuevo_extravio ($tipo, $lugarEx, $nom, $gen, $color, $raza, $tamaño, $edad, $descr, $contacto, $foto);
?>

