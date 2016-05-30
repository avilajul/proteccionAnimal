<?php
session_start();
include ("../../controlador/sesion/seguridadInicio.php");
$fundacion = "fundacion";
$persona = "persona natural";
$tipo = $_SESSION['tipo'];
if(isset($_SESSION['tipo']) && $tipo == $fundacion )
{?>
	<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<!--Let browser know website is optimized for mobile-->
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	    <?php include ("../componentes/link.php");?>
		<title>Subir Anuncio</title>
	</head>
	<body class="">
		
		<header class="center-align">
			<?php			
			include ("../componentes/menu.php");?>
		</header>
		<main>
			<h3  class="center-align green-text titulo">Inscribir Anuncio</h3>
			<div class="row">
				<form class="col s12 m6 l6" action="../../../controlador/anuncio/anuncioCont.php" method="POST" enctype="multipart/form-data">
			        <div class="input-field">
			          <input disabled value="<?php echo $_SESSION['usuario']?>" id="disabled" name="idUsuario" type="text" class="validate" required="">
			          <label for="disabled">Autor</label>
			        </div>
			        <div class="input-field">			        
          				<input id="last_name" type="text" class="validate" required="" name="titulo">
          				<label for="">Titulo de la Publicación</label>
        			</div>					
					<div class="input-field">
						<i class="material-icons prefix col s12">description</i>
	            		<textarea id="textarea1" class="materialize-textarea" name="descripcion" length="140"></textarea>
	            		<label for="textarea1">Descripción</label>
	          		</div>
					<div class="input-field">
						<input type="date" class="datepicker col s12" name="fechaEvento" required="">
						<label for="textarea1">Fecha del Evento</label>
					</div>          		
				</div>
				<div class="file-field input-field">
			      <div class="btn green">
			        <span>Foto</span>
			        <input type="file" name="foto">
			      </div>
			      <div class="file-path-wrapper">
			        <input class="file-path validate"  type="text" required="">
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
			    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
			    $('.modal-trigger').leanModal();
			  });
		  	$(document).ready(function(){
	      	$('.slider').slider({full_width: true});
	    	});
	    	$('select').material_select();
	    	$(document).ready(function() {    		
	  		});
	  		$('.datepicker').pickadate({
		    	selectMonths: true, // Creates a dropdown to control month
		    	selectYears: 15, // Creates a dropdown of 15 years to control year
		    	format: 'yy-mm-dd',
		    	formatSubmit: 'yy-mm-dd'
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