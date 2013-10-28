<!DOCTYPE html>
<html lang="es">
<head>
	<title>LAMP login</title>
	<meta charset="utf-8"/>
	<meta description="descripcion de la pagina para los buscadores"/><!-- Facilita la elección de tiendas para adquirir productos -->
	<link rel="stylesheet" type="text/css" media="all" href="css/estilos.css"/>
	<!--<link rel="stylesheet" type="text/css" media="print"/>-->
	<!--<link rel="stylesheet" type="text/css" media="movil"/>-->
	
<!-- 	<script http://code.jquery.com/jquery-2.0.3.min.js /> -->
	
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
	<!--Parte central-->
	<article>
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
		<section#login>
			<form class="contact_form" action="#" method="post">
				<ul>
					<li>
						<h2>Inicia sesión</h2>
					</li>
					<li>
						<label for="email">Usuario:</label>
						<input type="email" class="inputtext" name="email" id="email" placeholder="usuario@ejemplo.com" required />
					</li>
					<li>
						<label for="pass">Contraseña:</label>
						<input type="password" class="inputtext" name="pass" id="pass" placeholder="contraseña" required/>
					</li>
					<li>
						<button class="submit" type="submit">Iniciar sesión</button>
					</li>
				</ul>
			</form>
		</section>
	</article>
	<!--Pie de Pagina-->
	<footer>
		Pie de pagina corporativo.
		<a href="http://jigsaw.w3.org/css-validator/">Validador CSS</a>
		<a href="http://validator.w3.org/">Validador HTML</a>
	</footer>
</body>
</html>