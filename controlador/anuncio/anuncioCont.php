<?php
session_start();
$usuario= $_SESSION['usuario'];
include_once ('../../modelo/anuncio/anuncioModelo.php');
$anuncioModel = new AnuncioModelo();
	 	   
	 	   $idUsuario = $usuario;
	 	   $titulo = $_POST["titulo"];
	 	   $descripcion = $_POST["descripcion"];
	 	   $fechaEvento = $_POST["fechaEvento"];
	 	   $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));

	 	   echo "Fecha: ".$fechaEvento;
	 	   echo "titulo: ".$titulo;
	 	   echo "descripcion: ".$descripcion."<br>";

	 	   $anuncio = $anuncioModel->nuevo_anuncio($idUsuario, $titulo, $descripcion, $fechaEvento, $foto);
	 	   $publicaciones = $anuncioModel->verAnuncios();

	 	   require('../../vista/fundacion/index.php');

	 	 
	 	  
	 	

	 	 
?>	
