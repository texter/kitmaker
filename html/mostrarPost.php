<!DOCTYPE html>
<html lang="es">
<head>
	<title>LAMP ,mostrar post</title>
	<meta charset="utf-8"/>
	<meta description="descripcion de la pagina para los buscadores"/><!-- Facilita la elección de tiendas para adquirir productos -->
	<link rel="stylesheet" type="text/css" media="all" href="css/estilos.css"/>
	<!--<link rel="stylesheet" type="text/css" media="print"/>-->
	<!--<link rel="stylesheet" type="text/css" media="movil"/>-->
	
	<!--<script http://code.jquery.com/jquery-1.7.2.min.js/>-->
	
</head>
<body>
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
		<section#cuerpo>
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