<?php
session_start();
include ("../../controlador/sesion/seguridadInicio.php");
$tipo = $_SESSION['tipo'];

if(isset($_SESSION['tipo']))
{?>
	<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<!--Let browser know website is optimized for mobile-->
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	    <?php include ("../componentes/link.php");?>
		<title>Protección Animal</title>
	</head>
	<body class="">	
		<header class="center-align">
		<?php include ("../componentes/menu.php");?>
		</header>
		<main>
		<div class="row">
			<section class="col s12 m6 l9">
				<header><h1 class="green-text center-align">Anuncios</h1></header>
				<div class="row">			
				<?php /*
					foreach ($publicaciones as $publicacion)
					{?>
						<img src="data:image/jpg;base64,<?php echo base64_encode($publicacion['foto']);?>" alt="" widht:"50%" height:"50%">
						<?php
					}*/
				?>
				<div class="col s12 m6 l4">
				  <div class="card hoverable">
				    <div class="card-image">
				      <img src="../lib/images/articulo1.jpg">
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
					      <img class="activator" src="../lib/images/titulo1.png">
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
					      <img class="activator" src="../lib/images/marcha.jpg">
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
			$('.button-collapse').sideNav();
			  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
			  //$('.collapsible').collapsible();
		  	$(document).ready(function(){
	      	$('.slider').slider({full_width: true});
	    	});
	    	$('.dropdown-button').dropdown();
	      </script>
	      <?php
	      	if($tipo == "persona natural")
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
