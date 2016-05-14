<?php
$nombre_archivo = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
//verificamos si en la ruta nos han indicado el directorio en el que se encuentra
if ( strpos($nombre_archivo, '/') !== FALSE )
    //de ser asi, lo eliminamos, y solamente nos quedamos con el nombre sin su extension
    $nombre_archivo = preg_replace('/\.php$/', '' ,array_pop(explode('/', $nombre_archivo)));

$_POST['archivo'] = $nombre_archivo;

require ('../modelo/adopcion/adopcionModel.php');
$adopcionModelo = new AdopcionModelo();

$adopcion = $adopcionModelo->verAdopcion();	
?>
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
	<title>Ver Mascotas en Adopción</title>
</head>
<body class="">
	<header class="center-align">
	<?php include ("componentes/menuVisitante.php");?>
	</header>
	<main>
		<h3  class="center-align green-text titulo">Ver Mascotas en Adopción</h3>
		<div class="row">
		<div class="col s12 m6 l6">
		<?php
			echo $id = $adopcion['idAdopcion'];
			echo "<br>";
		?>
		<img src="data:image/jpg;base64,<?php echo base64_encode($adopcion['foto']);?>" alt="" widht:"50%" height:"50%">

		</div>
		<aside class="col s12 m6 l6 center-align">
			<h4 class="center-align">Entes Encargados</h4>
			<img src="lib/images/policia.jpg" >
			<img src="lib/images/tulua.png" >

		</aside>
		</div>
	</main>
	<?php include ("componentes/footer.php");?>
 <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="lib/js/materialize.min.js"></script>
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
