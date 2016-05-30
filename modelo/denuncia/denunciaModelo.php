<html>
<head><title>Denuncia Modelo</title></head>
<body>
	<h1>Denuncia Modelo</h1>
	<?php
	function nueva_denuncia ($nick, $passw, $nom, $dir, $tel, $ciudad, $tipoU ){
$sql = "INSERT INTO usuario (nickname, password, nombre, direccion, telefono, ciudad, tipoUsuario)
          VALUES ('".$nick."', '".$passw."','".$nom."', '".$dir."', '".$tel."', '".$ciudad."', '".$tipoU."')";

          if (mysqli_query($conn, $sql)) {
           echo "Nuevo usuario creado satisfactoramente";
          } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }

          mysqli_close($conn);
	 	  }else{
	 	  	echo '<h2>' .$error. '</h2><br>';
	 	  	//echo '<a href="javascript:history.back(1)">Volver al formulario</a>';
	 	  }
	 	}
         ?>	
</body>
</html>