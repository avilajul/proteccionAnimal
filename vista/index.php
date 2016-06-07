<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <!-- icono para la pestaña de la pagina-->
    <link rel='icon' href='lib/images/icono.png' />
	<link rel="stylesheet" href="lib/css/normalize.css">
	<link type="text/css" rel="stylesheet" href="lib/css/materialize.min.css"  media="screen,projection"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="lib/css/styl.css">
	<title>Protección Animal</title>
</head>
<body class="">
	<header class="center-align">
	<?php include ("componentes/menuVisitante.php");?>
	</header>
	<main>
	<div class="slider">
	<ul class="slides">
	  <li>
	    <img src="lib/images/slide1.jpg" > <!-- random image -->
	    <!-- <div class="caption center-align">
	     <h3>El abandono es un tipo de maltrato</h3>
	     <h5 class="light grey-text text-lighten-3">Entrega en adopción usando nuestra página</h5>
	    </div> -->
	  </li>
	  <li>
	    <img src="lib/images/slide2.jpg" > <!-- random image -->
	    <div class="caption left-align">
	    </div>
	  </li>
	  <li>
	    <img src="lib/images/slide3.jpg" > <!-- random image -->
	    <div class="caption right-align">
	    </div>
	  </li>
	  <li>
	    <img src="lib/images/slide4.jpg" > <!-- random image -->
	    <div class="caption center-align">
	      <h3>El abandono es un tipo de maltrato</h3>
	      <h5 class="light grey-text text-lighten-3">Entrega en adopción usando esta web</h5>
	    </div>
	  </li>
	</ul>
	</div>
	<!-- Modal Structure -->
	<div id="modal1" class="modal">
	<div class="modal-content">
	  <h4>Inicia sesion</h4>
	  <div class="row">
	  	<form action="../controlador/sesion/validaSesion.php" method="POST" class="col s12">
			<div class="row">
				<div class="input-field col s12">
					<i class="mdi-action-account-circle prefix"></i>
					<input type="text" name="usuario" id="icon_prefix" class="validate" required="">
					<label for="icon_prefix">Usuario</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<i class="mdi-action-lock prefix"></i>
					<input type="password" name="contrasena" id="password" class="validate" required="">
					<label for="password" class>Contraseña</label>
				</div>
			</div>
				<div class="row modal-footer">
				<button class="btn green waves-effect left waves-light col m6 l3 s12" type="submit" name="login">Iniciar sesión
					</button>
					</div>
	  	</form>
	  </div>
	</div>
	<div class="modal-footer">
	  <a href="registroUsuario/crearCuenta.php" class=" green-text modal-action modal-close waves-effect waves-green btn-flat">Crear cuenta</a>
	</div>
	</div>
	<div class="row">
		<section class="col s12 m6 l9">
			<header><h1 class="green-text center-align">Anuncios</h1></header>
			<div class="row">
			<div class="col s12 m6 l4">
			  <div class="card hoverable">
			    <div class="card-image">
			      <img src="lib/images/articulo1.jpg">
			      <span class="card-title">Familia</span>
			    </div>
			    <div class="card-content">
			      <p>I am a very simple card. I am good at containing small bits of information.
			      I am convenient because I require little markup to use effectively.</p>
			    </div>
			    <div class="card-action">
			      <a href="#">This is a link</a>
			    </div>
			  </div>
			</div>
			<div class="col s12 m6 l4">
				<div class="card hoverable">
				    <div class="card-image waves-effect waves-block waves-light">
				      <img class="activator" src="lib/images/titulo1.png">
				    </div>
				    <div class="card-content">
				      <span class="card-title activator grey-text text-darken-4">Jornada de Vacunación<i class="mdi-navigation-more-vert right"></i></span>
				      <p><a href="#">This is a link</a></p>
				    </div>
				    <div class="card-reveal">
				      <span class="card-title grey-text text-darken-4">Jornada de Vacunación<i class="mdi-navigation-close right"></i></span>
				      <p>Here is some more information about this product that is only revealed once clicked on.</p>
				    </div>
				  </div>
			</div>
			<div class="col s12 m6 l4">
				<div class="card hoverable">
				    <div class="card-image waves-effect waves-block waves-light">
				      <img class="activator" src="lib/images/marcha.jpg">
				    </div>
				    <div class="card-content">
				      <span class="card-title activator grey-text text-darken-4">Marcha<i class="mdi-navigation-more-vert right"></i></span>
				      <p><a href="#">This is a link</a></p>
				    </div>
				    <div class="card-reveal">
				      <span class="card-title grey-text text-darken-4">Marcha<i class="mdi-navigation-close right"></i></span>
				      <p>Here is some more information about this product that is only revealed once clicked on.</p>
				    </div>
				  </div>
			</div>
			</div>
		</section>
		<aside class="col s12 m6 l3 center-align">
			<h4 class="center-align">Entes Encargados</h4>
			<img src="lib/images/policia.jpg" >
			<img src="lib/images/tulua.png" >
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
      <script type="text/javascript" src="lib/js/materialize.min.js"></script>
      <script type="text/javascript">
      // Initialize collapse button
      // Initialize collapse button
		$('.button-collapse').sideNav();
		  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
		  //$('.collapsible').collapsible();
		$(document).ready(function(){
		    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
		    $('.modal-trigger').leanModal();
		  });
	  	$(document).ready(function(){
      	$('.slider').slider({full_width: true});
    	});
    	$('.dropdown-button').dropdown();
      </script>
</body>
</html>
