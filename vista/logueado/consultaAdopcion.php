<?php
session_start();
include ("../../../controlador/sesion/seguridad.php");
if(isset($_SESSION['tipo']))
{?>

	<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<!--Let browser know website is optimized for mobile-->
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	    <!-- icono para la pestaña de la pagina-->
	    <link rel='icon' href='../../lib/images/icono.png' />
		<link rel="stylesheet" href="../../lib/css/normalize.css">
		<link type="text/css" rel="stylesheet" href="../../lib/css/materialize.min.css"  media="screen,projection"/>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="../../lib/css/styl.css">
		<title>Ver Mascotas en Adopción</title>
	</head>
	<body class="">
		
		<header class="center-align">
			<!-- Dropdown Structure -->
			<ul id='dropdown1' class='dropdown-content'>
		    	<li><a href="insAdopcion.php">Inscribir mascota en adopción</a></li>
		    	<li class="divider"></li>
		    	<li><a href="#!">Ver mascota en adopción</a></li>    
		  	</ul>
		  	<!-- Dropdown Structure -->
		  	<ul id='dropdown2' class='dropdown-content'>
		    	<li><a href="../extraviados/insExtraviado.php">Incribir mascota extraviada</a></li>
		    	<li class="divider"></li>
		    	<li><a href="../extraviados/verExtraviado.php">Ver mascota extraviada</a></li>    
		  	</ul>
		  	<!-- Dropdown Structure -->
		  	<ul id='dropdown3' class='dropdown-content'>
		    	<li><a href="#!">Inscribir mascota en adopción</a></li>
		    	<li class="divider"></li>
		    	<li><a href="#!">Ver mascota en adopción</a></li>    
		  	</ul>
		  	<!-- Dropdown Structure -->
		  	<ul id='dropdown4' class='dropdown-content'>
		    	<li><a href="../extraviados/insExtraviado.php">Inscribir mascota extraviada</a></li>
		    	<li class="divider"></li>
		    	<li><a href="../extraviados/verExtraviado.php">Ver mascota extraviada</a></li>    
		  	</ul>
			<nav>
			    <div class="nav-wrapper green">
			      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu "></i></a>
			      <ul class="right hide-on-med-and-down">
			      	<li><a href="../inicio.php"><i class="material-icons">home</i></a></li>
			        <li><a href="#!">Denuncias</a></li>
			        <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="mdi-navigation-arrow-drop-down right"></i>Adopciones</a></li>
			        <li><a class="dropdown-button" href="#!" data-activates="dropdown2"><i class="mdi-navigation-arrow-drop-down right"></i>Extraviados</a></li>
			        <li><a class="dropdown-button"><?php echo $_SESSION['usuario'] ?></a></li>
			        <li><a href="../../../controlador/sesion/cerrarSesion.php" class="waves-effect waves-light">Cerrar Sesion</a></li>
			      </ul>
			      <ul class="side-nav" id="mobile-demo">
			      	<li><a href="../inicio.php"><i class="material-icons">home</i></a></li>
			        <li><a href="#!">Denuncias</a></li>
			        <li><a class="dropdown-button" href="#!" data-activates="dropdown3"><i class="mdi-navigation-arrow-drop-down right"></i>Adopciones</a></li>
			        <li><a class="dropdown-button" href="#!" data-activates="dropdown4"><i class="mdi-navigation-arrow-drop-down right"></i>Extraviados</a></li>
			        <li><a class="dropdown-button"><?php echo $_SESSION['usuario'] ?></a></li>
			        <li><a href="../../../controlador/sesion/cerrarSesion.php" class="waves-effect waves-light">Cerrar Sesion</a></li>
			      </ul>
			    </div>
			</nav>
		</header>
		<main>
			<h3  class="center-align green-text titulo">Ver Mascotas en Adopción</h3>
			<div class="row">
			<form class="col s12 m6 l6" action="../../../controlador/adopcion/verAdopcionCont.php" method="POST">
			<button class="btn green waves-effect waves-light" type="submit" name="action">Consultar
    		<i class="material-icons right">send</i>
  			</button>
			</form>
			<aside class="col s12 m6 l6 center-align">
				<h4 class="center-align">Entes Encargados</h4>
				<img src="../../lib/images/policia.jpg" >
				<img src="../../lib/images/tulua.png" >

			</aside>
			</div>
		</main>
		<footer class="page-footer green">
			<div class="container">
			<div class="row">
		      	<div class="col l6 s12">
		        	<h5 class="white-text ">Protección Animal</h5>
		        	<p class="grey-text text-lighten-4">Aplicaciones en la Web y Redes Inalámbricas</p>
		        	<p class="grey-text text-lighten-4">Universidad del Valle</p>
		      	</div>
		      	<div class="col l4 offset-l2 s12">
		        	<h5 class="white-text">Autores</h5>
		        	<ul>
		          		<li><a class="grey-text text-lighten-3" href="#!">Julián Eduardo Avila</a></li>
		          		<li><a class="grey-text text-lighten-3" href="#!">Andrés Mauricio Hoyos</a></li>                 
		        	</ul>
		      	</div>
			</div>
		</div>
		<div class="footer-copyright">
		<div class="container ">
		© 2015 Copyright            
		</div>
		</div>
		</footer>


	 <!--Import jQuery before materialize.js-->
	      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	      <script type="text/javascript" src="../../lib/js/materialize.min.js"></script>
	      <script type="text/javascript">
	      // Initialize collapse button
	      // Initialize collapse button
			$(".button-collapse").sideNav();
			  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
			  //$('.collapsible').collapsible();
			$(document).ready(function(){
			    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
			    $('.modal-trigger').leanModal();
			  });
		  	$(document).ready(function(){
	      	$('.slider').slider({full_width: true});
	    	});
	    	$('select').material_select();
	    	$(document).ready(function() {    		
	  		});

	      </script> 
	</body>
	</html>
<?php
}
else
{
	echo '<script> window.location="../../index.php"; </script>';
}
?>