<!DOCTYPE html>
<html lang="es">
	<head>
		<title><?php echo $title?> - LAMP Test</title>
		<meta charset="utf-8"/>
		<meta description="descripcion de la pagina para los buscadores"/><!-- Facilita la elección de tiendas para adquirir productos -->
		<link rel="stylesheet" type="text/css" media="all" href="/css/estilos.css"/>
	</head>
	<body>
		<?php
		//Include the configuration file
		include_once './inc/wurfl_config_standard.php';
		
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
				<a href="home">Aquí va el logo</a>
				<figcaption>Titulo del logo</figcaption>
			</figure>
		</header>
		<!--Botones y navegacion-->
		<nav>
			<ul>
				<li><a href="home">Inicio</a></li>
				<li><a href="login">Acceder</a></li>
				<li><a href="crearPost">Crear post</a></li>
				<li><a href="about">About</a></li>
			</ul>
		</nav>
		<section#WURFL>
			<h4>VERSION: <?php echo $wurflInfo->version; ?></h4>
			User Agent: <b> <?php echo htmlspecialchars($ua); ?> </b>
			<ul>
				<li>ID: <?php echo $requestingDevice->id; ?></li>
				<li>Brand Name: <?php echo $requestingDevice->getCapability('brand_name'); ?> </li>
				<li>Model Name: <?php echo $requestingDevice->getCapability('model_name'); ?> </li>
				<li>Marketing Name: <?php echo $requestingDevice->getCapability('marketing_name'); ?> </li>
				<li>Preferred Markup: <?php echo $requestingDevice->getCapability('preferred_markup'); ?> </li>
				<li>Resolution Width: <?php echo $requestingDevice->getCapability('resolution_width'); ?> </li>
				<li>Resolution Height: <?php echo $requestingDevice->getCapability('resolution_height'); ?> </li>
			</ul>
			<p><b>Query WURFL by providing the user agent:</b></p>
		</section>