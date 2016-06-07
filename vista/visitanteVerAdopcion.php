<?php
$nombre_archivo = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
//verificamos si en la ruta nos han indicado el directorio en el que se encuentra
if ( strpos($nombre_archivo, '/') !== FALSE )
    //de ser asi, lo eliminamos, y solamente nos quedamos con el nombre sin su extension
    $nombre_archivo = preg_replace('/\.php$/', '' ,array_pop(explode('/', $nombre_archivo)));

$_POST['archivo'] = $nombre_archivo;

require ('../modelo/adopcion/adopcionModel.php');
$adopcionModelo = new AdopcionModelo();
$adopcion= null;

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
		<?php

			//$id = $adopcion['idAdopcion'];
			if(is_null($adopcion))
			{
				echo "No hay Mascotas disponibles para adopción";

			}
			else
			{
				?>
				<div class="row">
				<div class="col s12 m3 l3">
					<div class="card hoverable">
					    <div class="card-image waves-effect waves-block waves-light">
					      <img class="activator" src="data:image/jpg;base64,<?php echo base64_encode($adopcion['foto']);?>" alt="">
					    </div>
					    <div class="card-content">
					      <span class="card-title activator grey-text text-darken-4"><?php echo $adopcion['nombre'] ?><i class="mdi-navigation-more-vert right"></i></span>
					      <p><a href="#">This is a link</a></p>
					    </div>
					    <div class="card-reveal">
					      <span class="card-title grey-text text-darken-4"><?php echo $adopcion['nombre'] ?><i class="mdi-navigation-close right"></i></span>
					      <p><?php echo nl2br("Genero: ".$adopcion['genero'].
                                    "\n"."Color: ".$adopcion['color'].
                                    "\n"."Raza: ".$adopcion['raza'].
                                    "\n"."tamaño: ".$adopcion['tamano'].
                                    "\n"."Edad: ".$adopcion['edad'].
                                    "\n"."".$adopcion['descripcion'].
                                    "\n"."Contacto: ".$adopcion['contacto']."");
                    ?>
                </p>
					    </div>
					  </div>
				</div>
				<div class="col s12 m3 l3">
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
        <div class="col s12 m3 l3">
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
        <div class="col s12 m3 l3">
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
        <div class="row">
          <div class="col s12 m3 l3">
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
          <div class="col s12 m3 l3">
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
				<?php
			}
      ?>

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
