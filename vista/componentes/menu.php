			<!-- Dropdown Structure -->
			<ul id='dropdown1' class='dropdown-content'>
		    	<li><a href="insAdopcion.php">Inscribir mascota en adopción</a></li>
		    	<li class="divider"></li>
		    	<li><a href="verAdopcion.php">Ver mascota en adopción</a></li>    
		  	</ul>
		  	<!-- Dropdown Structure -->
		  	<ul id='dropdown2' class='dropdown-content'>
		    	<li><a href="insExtraviado.php">Incribir mascota extraviada</a></li>
		    	<li class="divider"></li>
		    	<li><a href="verExtraviado.php">Ver mascota extraviada</a></li>    
		  	</ul>
		  	<!-- Dropdown Structure -->
		  	<ul id='dropdown3' class='dropdown-content'>
		    	<li><a href="insAdopcion.php">Inscribir mascota en adopción</a></li>
		    	<li class="divider"></li>
		    	<li><a href="verAdopcion.php">Ver mascota en adopción</a></li>    
		  	</ul>
		  	<!-- Dropdown Structure -->
		  	<ul id='dropdown4' class='dropdown-content'>
		    	<li><a href="insExtraviado.php">Inscribir mascota extraviada</a></li>
		    	<li class="divider"></li>
		    	<li><a href="verExtraviado.php">Ver mascota extraviada</a></li>    
		  	</ul>
			<nav class="">
			    <div class="nav-wrapper green"> 			      
			      <a href="#!" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
			      <ul class="right hide-on-med-and-down">
			      	<li><a href="inicio.php"><i class="material-icons">home</i></a></li>
			      	<li class="publicacion"><a href="insAnuncios.php">Publicación</a></li>
			        <li class="denuncias"><a href="denuncia.php">Denuncias</a></li>
			        <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="mdi-navigation-arrow-drop-down right"></i>Adopciones</a></li>
			        <li><a class="dropdown-button" href="#!" data-activates="dropdown2"><i class="mdi-navigation-arrow-drop-down right"></i>Extraviados</a></li>
			        <li class="usuario"><a class="dropdown-button"><?php echo $_SESSION['usuario'] ?></a></li>
			        <li class="sesion"><a href="../../controlador/sesion/cerrarSesion.php" class="waves-effect waves-light">Cerrar Sesion</a></li>
			      </ul>
			      <ul class="side-nav" id="mobile-demo">
			      	<li><a href="inicio.php"><i class="material-icons">home</i></a></li>
			      	<li class="publicacion"><a href="insAnuncios.php">Publicación</a></li>
			        <li><a href="denuncia.php">Denuncias</a></li>
			        <li><a class="dropdown-button" href="#!" data-activates="dropdown3"><i class="mdi-navigation-arrow-drop-down right"></i>Adopciones</a></li>
			        <li><a class="dropdown-button" href="#!" data-activates="dropdown4"><i class="mdi-navigation-arrow-drop-down right"></i>Extraviados</a></li>
			        <li><a class="dropdown-button">Usuario <?php echo $_SESSION['usuario']?></a></li>
			        <li><a href="../../controlador/sesion/cerrarSesion.php" class="waves-effect waves-light">Cerrar Sesion</a></li>			        
			      </ul>
			    </div>
			</nav>