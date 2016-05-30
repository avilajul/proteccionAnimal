<?php
include ('configuracionMailer.php');
$mail = new Correo();
	 	   
$mail->enviarEmail ($_POST["contenido"]);

header("Location: ../../vista/index.php"); 
?>