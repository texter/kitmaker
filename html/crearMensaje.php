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
	<!-- Cabecera-->
	<header>
		<h1>
			Titulo de la pagina
		</h1>
		<figure>
			<a href="index.html">Aquí va el logo</a>
			<figcaption>Titulo del logo</figcaption>
		</figure>
	</header>
	<!--Botones y navegacion-->
	<nav>
		<ul>
			<li><a href="index.html">Inicio</a></li>
			<li><a href="crearPost.html">Crear post</a></li>
			<li><a href="login.html">Acceder</a></li>
			<li><a></a></li>
		</ul>
	</nav>
	<!--Parte central-->
	<article>
		<section#createPost>
			<form class="createPost" action="#" method="post">
				<ul>
					<li>
						<h3>Entrada</h3>
					</li>
					<li>
						<label for="titulo"><b>Título:</b></label>
						<textarea type="text" class="inputtext" name="titulo" id="titulo" placeholder="Título" cols="60" rows="1"></textarea>
					</li>
					<li>
						<label for="entrada"><b>Cuerpo del post:</b></label>
						<textarea type="text" class="inputtext" name="entrada" id="entrada" placeholder="" cols="60" rows="10"></textarea>
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