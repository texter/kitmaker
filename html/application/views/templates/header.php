<!DOCTYPE html>
<html lang="es">
	<head>
		<title><?php echo $title?> - LAMP Test</title>
		<meta charset="utf-8"/>
		<meta description="descripcion de la pagina para los buscadores"/><!-- Facilita la elección de tiendas para adquirir productos -->
		<link rel="stylesheet" type="text/css" media="all" href="../../../css/estilos.css"/>
	</head>
	<body>
		Puede que el WURFL este mal...
		Puede que la ruta del css esté mal...
		<?php
		//Include the configuration file
		include_once '../../../inc/wurfl_config_standard.php';
		
		$wurflInfo = $wurflManager->getWURFLInfo();
		if (isset($_GET['ua']) && trim($_GET['ua'])) {
				$ua = $_GET['ua'];
				$requestingDevice = $wurflManager->getDeviceForUserAgent($_GET['ua']);
		} else {
				$ua = $_SERVER['HTTP_USER_AGENT'];
				// This line detects the visiting device by looking at its HTTP Request ($_SERVER)
				$requestingDevice = $wurflManager->getDeviceForHttpRequest($_SERVER);
		}
		?>
		<!-- Cabecera-->
		<header>
			<h1>
				Titulo de la aplicación
			</h1>
			<figure>
				<a href="index.php">Aquí va el logo</a>
				<figcaption>Titulo del logo</figcaption>
			</figure>
		</header>
		<!--Botones y navegacion-->
		<nav>
			<ul>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="login.php">Acceder</a></li>
				<li><a href="crearPost.php">Crear post</a></li>
				<li><a></a></li>
			</ul>
		</nav>