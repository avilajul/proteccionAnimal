<?php
include_once ('../../modelo/adopcion/adopcionModel.php');
$adopcionModelo = new AdopcionModelo();
	 	   
	 	   $tipo = $_POST["tipoAnimal"];
	 	   $nom = $_POST["nombre"];
	 	   $gen = $_POST["genero"];
	 	   $color = $_POST["color"];
	 	   $raza = $_POST["raza"];
	 	   $tamaño = $_POST["tamano"];
	 	   $edad = $_POST["edad"];
	 	   $descr = $_POST["descripcion"];
	 	   $contacto = $_POST["contacto"];
	 	   $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
	 	  
	 	 $adopcionModelo->nueva_adopcion ($tipo, $nom, $gen, $color, $raza, $tamaño, $edad, $descr, $contacto, $foto);
?>