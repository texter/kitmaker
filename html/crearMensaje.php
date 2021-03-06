<!DOCTYPE html>
<html lang="es">
<head>
	<title>LAMP crear post</title>
	<meta charset="utf-8"/>
	<meta description="descripcion de la pagina para los buscadores"/><!-- Facilita la elección de tiendas para adquirir productos -->
	<link rel="stylesheet" type="text/css" media="all" href="css/estilos.css"/>
	<!--<link rel="stylesheet" type="text/css" media="print"/>-->
	<!--<link rel="stylesheet" type="text/css" media="movil"/>-->
	
	<!--<script http://code.jquery.com/jquery-1.7.2.min.js/>-->
	
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
			Titulo de la pagina
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
			<li><a href="crearPost.php">Crear post</a></li>
			<li><a href="login.php">Acceder</a></li>
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
		<section#createMessage>
			<form class="createMessage" action="agregarMensaje.php" method="post">
				<ul>
					<li>
						<h3>Respuesta</h3>
					</li>
					<li>
						<label for="respuesta"><b>Cuerpo de la respuesta:</b></label>
						<textarea type="text" class="inputtext" name="contenido" id="contenido" placeholder="Inserta aqui tu respuesta" cols="60" rows="10" required></textarea>
					</li>
					<li>
						<input name="id_post" id="id_post" type="hidden" value="<?php echo $_GET["id"];?>">
					</li>
					<li>
						<button class="submit" type="submit">Publicar</button>
					</li>
				</ul>
			</form>
			<?php
			#Conectamos con la base de datos
			#Conected to mysql
			$conexion = mysql_connect("localhost","kitmaker","kitmaker") or die ("Fallo estableciendo la conexión con la base de datos");
			
			#Seleccionamos la base de datos a utilizar
			mysql_select_db("db_blog") or die("Error al seleccionar la base de datos");
			
			$id=$_GET["id"];
			#Consultamos los datos
			$result = mysql_query("SELECT titulo,contenido FROM post WHERE id=$id");
			
			while($row = mysql_fetch_array($result)){
				?><h4><?echo $row["titulo"];?></h4>
				<p><?echo $row["contenido"];?></p>
				<?
			}
			#Cerramos la conexion con la base de datos
			mysql_close($conexion);
			?>
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