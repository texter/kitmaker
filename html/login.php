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
	<!-- Cabecera-->
	<header>
		<h1>
			Titulo de la aplicación
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
			<li><a href="login.html">Acceder</a></li>
			<li><a href="crearPost.html">Crear post</a></li>
			<li><a></a></li>
		</ul>
	</nav>
	<!--Parte central-->
	<article>
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