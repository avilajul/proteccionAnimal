<?php
session_start();
include ("../../controlador/sesion/seguridad.php");
if(isset($_SESSION['tipo']))
{?>
	<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<!--Let browser know website is optimized for mobile-->
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	    <?php include ("../componentes/link.php");?>
		<title>Inscribir Mascota Extraviada</title>
	</head>
	<body class="">		
		<header class="center-align">
		<?php include ("../componentes/menu.php");?>
		</header>
		<main>
			<h3  class="center-align green-text titulo">Inscribir Mascota Extraviada</h3>
			<div class="row">
				<form class="col s12 m6 l6" action="../../controlador/extraviado/extravioCont.php" method="POST">
				<div class="input-field ">
					<i class="material-icons prefix">my_location</i>		    
				    <input id="icon_prefix" name="lugarExtraviado" type="text" class="validate" required="">
				    <label for="icon_prefix">Lugar del extravío</label>
				</div>				
				<div class="col s12 m12 l12">
					<div class="input-field prefix ">
					    <select name="tipoAnimal" required="">
					      <option value="" disabled selected>Escoja una opción</option>
					      <option value="1">Canino</option>
					      <option value="2">Felino</option>
					      <option value="3">Equino</option>
					      <option value="4">Ave</option>
					      <option value="5">Roedor</option>
					      <option value="6">Reptil</option>
					    </select>
					    <label>Tipo de Animal</label>
					</div>					
					<div class="input-field ">
						<i class="material-icons prefix">pets</i>
						<input id="icon_prefix" type="text" name="nombre" class="validate" required="">
						<label for="icon_prefix" class>Nombre de la mascota</label>
					</div>
				    <p>
				      <input  name="genero" type="radio" value="macho" id="test1" required=""/>
				      <label for="test1">Macho</label>
				    </p>
				    <p>
				      <input  name="genero" type="radio" value="hembra" id="test2"required="" />
				      <label for="test2">Hembra</label>
				    </p>		
					<div class="input-field ">				    
					    <input id="icon_prefix" name="color" type="text" class="validate" required="">
					    <label for="icon_prefix">Color</label>
					</div>
					<div class="input-field ">				    
					    <input id="icon_prefix" name="raza" type="text" class="validate" required="">
					    <label for="icon_prefix">Raza</label>
					</div>
					<div class="input-field ">				    
					    <input id="icon_prefix" name="tamano" type="text" class="validate" required="">
					    <label for="icon_prefix">Tamaño</label>
					</div>
			        <div class="input-field">
			          <input id="last_name" type="text" name="edad" class="validate" required="">
			          <label for="last_name">Edad</label>
			        </div>
					</div>
					<div class="input-field col s12">
						<i class="material-icons prefix">description</i>
	            		<textarea id="textarea1" class="materialize-textarea" name="descripcion" length="140"></textarea>
	            		<label for="textarea1">Descripción</label>
	          		</div>
					<div class="input-field col s12">
						<i class="material-icons prefix">contacts</i>
					    <input id="input_text" type="text" name="contacto" length="50">
					    <label for="input_text">Contacto</label>
					</div>          		
				</div>
				<div class="file-field input-field col s12">
			      <div class="btn green">
			        <span>Foto</span>
			        <input type="file">
			      </div>
			      <div class="file-path-wrapper">
			        <input class="file-path validate" name="foto" type="text">
			      </div>
			    </div>			
				<button class="btn green waves-effect waves-light" type="submit" name="action">Enviar
	    		<i class="material-icons right">send</i>
	  			</button>
			</form>
			<?php include ("../componentes/aside.php");?>
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
	</body>
	</html>
	<?php
}
else
{
	echo '<script> window.location="../index.php"; </script>';
}
?>