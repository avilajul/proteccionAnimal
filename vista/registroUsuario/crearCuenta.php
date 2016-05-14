<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <!-- icono para la pestaña de la pagina-->
    <link rel='icon' href='../lib/images/icono.png' />
	<link rel="stylesheet" href="../lib/css/normalize.css">
	<link type="text/css" rel="stylesheet" href="../lib/css/materialize.min.css"  media="screen,projection"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="../lib/css/styl.css">
	<title>Crear Cuenta</title>
</head>
<body class="">	
	<header class="center-align">
		 <nav>
		    <div class="nav-wrapper green">
		      <a href="../index.php" class="brand-logo center">Protección Animal</a>
		      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu "></i></a>
		      <ul class="right hide-on-med-and-down">		        
		        <li><a href="#!">Denuncias</a></li>
		        <li><a href="#!">Adopción</a></li>
		        <li><a href="#!">Extraviados</a></li>
		        <!-- Modal Trigger -->
		        <li><a href="#modal1" class="modal-trigger waves-effect waves-light">Inciar Sesion</a></li>
		      </ul>
		      <ul class="side-nav" id="mobile-demo">
		        <li><a href="#!">Denuncias</a></li>
		        <li><a href="#!">Adopción</a></li>
		        <li><a href="#!">Extraviados</a></li>
		        <li><a href="#modal1" class="modal-trigger waves-effect waves-light">Inciar Sesion</a></li>
		        
		      </ul>
		    </div>
		  </nav>
	</header>
	<main>
		<h3  class="center-align green-text titulo">Formulario de registro</h3>
		<div class="row">
			<form class="col s12 m6 l6" action="../../controlador/registroUsuario/usuarioCont.php" method="POST">
			<div class="col s12 m12 l12">
				<div class="input-field ">
				    <i class="mdi-action-account-circle prefix"></i>
				    <input id="icon_prefix" name="nickname" type="text" class="validate" required="">
				    <label for="icon_prefix">Nombre de Usuario</label>
				</div>
				<div class="input-field ">
					<i class="mdi-action-lock prefix"></i>
					<input id="icon_prefix" type="password" name="password" class="validate" required="">
					<label for="password" class>Contraseña</label>
				</div>
				<div class="input-field ">
				    <i class="mdi-action-account-circle prefix"></i>
				    <input id="icon_prefix" name="nombre" type="text" class="validate" required="">
				    <label for="icon_prefix">Nombre completo</label>
				</div>
				<div class="input-field ">
				    <i class="material-icons prefix">directions</i>
				    <input id="icon_prefix" name="direccion" type="text" class="validate" required="">
				    <label for="icon_prefix">Direccion</label>
				</div>
				<div class="input-field ">
				    <i class="material-icons prefix">phone</i>
				    <input id="icon_telephone" name="telefono" type="tel" class="validate" required pattern="^[0-9]{1,10}$">
				    <label for="icon_telephone "data-error="Error"  >Teléfono</label>
				</div>
				<div class="input-field ">
				    <i class="material-icons prefix">my_location</i>
				    <input id="icon_prefix" name="ciudad" type="text" class="validate" required="">
				    <label for="icon_prefix ">ciudad</label>
				</div>
				<div class="input-field prefix ">
				    <select name="tipoUsuario" required="">
				      <option value="" disabled selected>Escoja una opción</option>
				      <option value="persona natural">Persona Natural</option>
				      <option value="fundacion">Fundación</option>				      
				    </select>
				    <label>Tipo de Usuario</label>
				</div>
			</div>
			<button class="btn green waves-effect waves-light" type="submit" name="action">Enviar
    		<i class="material-icons right">send</i>
  			</button>
		</form>
		<aside class="col s12 m6 l6 center-align">
			<h4 class="center-align">Entes Encargados</h4>
			<img src="../lib/images/policia.jpg" >
			<img src="../lib/images/tulua.png" >

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
      <script type="text/javascript" src="../lib/js/materialize.min.js"></script>
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
      </script> 
</body>
</html>