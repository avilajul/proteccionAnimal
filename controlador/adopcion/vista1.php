<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php
	echo $adopcion['idAdopcion'];
	?>
	<img src="data:image/jpg;base64,<?php echo base64_encode($adopcion['foto']);?>" alt="" widht:"50%" height:"50%">
</body>
</html>