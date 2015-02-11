<?php
	require_once("sesion.class.php");
	
	$sesion = new sesion();
	
//el signo es una variable de php llamada sesion y quieres obtener el usuario por get 
// de la clase sesion traiga el dato que le llega a usuario.
	$usuario = $sesion->get("usuario");
	
	if( $usuario == false )
	{	//header — Enviar encabezado sin formato HTTP
		header("Location: login.php");		
	}
	else 
	{
	?>
	<HTML><head>
	<title></title>
	</head>
	<body>
	<h1>Hola:  <?php echo $sesion->get("usuario"); ?> </h1> <a href="cerrarsesion.php"> Cerrar Sesion </a>
	<p> Aqui va el contenido de la pagina </p>
	</body>
	</HTML>
	
	<?php 
	}	
?>
