<?php

$nombre_archivo= $_POST['archivo'];
echo "archivo: ... ".$nombre_archivo;
if ($nombre_archivo=='visitanteVerAdopcion'){
include_once ('../modelo/adopcion/adopcionModel.php');
}
else{
include_once ('../../modelo/adopcion/adopcionModel.php');	
}

$adopcionModelo = new AdopcionModelo();

$adopcion = $adopcionModelo->verAdopcion();

echo $id = $adopcion['idAdopcion'];

	//require('../../vista/logueado/adopcion/verAdopcion.php');

	require('../../vista/vistanteVerAdopcion.php');
?>
<img src="data:image/jpg;base64,<?php echo base64_encode($adopcion['foto']);?>" alt="" widht:"50%" height:"50%">