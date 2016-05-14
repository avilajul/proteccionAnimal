<?php
session_start();
include ("../../controlador/sesion/seguridad.php");
$persona = "persona natural";
$tipo = $_SESSION['tipo'];
if(isset($_SESSION['tipo']))
{?>
	<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<!--Let browser know website is optimized for mobile-->
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	    <!-- icono para la pestaña de la pagina-->
	    <?php include ("../componentes/link.php");?>
		<title>Ver Mascota Extraviada</title>
	</head>
	<body class="">
		
		<header class="center-align">
		 <?php include ("../componentes/menu.php");?>
		</header>
		<main>
			<h3  class="center-align green-text titulo">Ver Mascota Extraviada</h3>
			<div class="row">
				<form class="col s12 m6 l6" action="../../controlador/extraviado/extravioCont.php" method="POST">
				</form>
			<aside class="col s12 m6 l6 center-align">
				<h4 class="center-align">Entes Encargados</h4>
				<img src="../lib/images/policia.jpg" >
				<img src="../lib/images/tulua.png" >

			</aside>
			</div>
		</main>
		<?php include ("../componentes/footer.php");?>
	 <!--Import jQuery before materialize.js-->
	      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	      <script type="text/javascript" src="../lib/js/materialize.min.js"></script>
	      <script type="text/javascript">
	      // Initialize collapse button
	      // Initialize collapse button
			$(".button-collapse").sideNav();
			  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
			  //$('.collapsible').collapsible();
		  	$(document).ready(function(){
	      	$('.slider').slider({full_width: true});
	    	});
	    	$('select').material_select();
	    	$(document).ready(function() {    		
	  		});
	      </script> 
	      <?php
	      	if($tipo == $persona)
	      	{?>
	      		<script type="text/javascript">	      	
	      		$(".publicacion").hide("fast");	      		
	      		</script>
	      <?php
	      	}
	      ?>
	</body>
	</html>
	<?php
}
else
{
	echo '<script> window.location="../index.php"; </script>';
}
?>