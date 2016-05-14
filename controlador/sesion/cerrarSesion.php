<?php
	session_start();
	//include ("seguridad.php");
	
	$_SESSION['tipo'] = 'nulo';	
	
	session_destroy();
	//header("location: index.php");
	echo '<script language="JavaScript" type="text/javascript">location.href="../../vista/index.php"</script>';
	
?>