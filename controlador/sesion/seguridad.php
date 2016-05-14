<?php
	if(! isset($_SESSION['tipo']))
	{
		session_destroy();
		unset($_SESSION);		
		
		echo '<script language="JavaScript" type="text/javascript">location.href="../../index.php"</script>';
	}	
	else
	{		
		//calcular el tiempo transcurrido
		$fechaGuardada = $_SESSION["ultimo_acceso"];
		
		date_default_timezone_set("America/Bogota");
		$ahora = date("Y-n-j H:i:s");
		
		$tiempo_transcurrido = (strtotime($ahora)-strtotime($fechaGuardada));
		
		//comparar el tiempo transcurrido
		if($tiempo_transcurrido >= 900) 
		{
			$_SESSION['tipo'] = 'nulo';
			
			//si pasaron 10 minutos o mas
			session_destroy(); // destruir la sesion
																		
			echo '<script language="JavaScript" type="text/javascript">location.href="../../index.php"</script>';
			
		}else 
		{
			$_SESSION["ultimo_acceso"] = $ahora; 
		}
	}	
	
?> 