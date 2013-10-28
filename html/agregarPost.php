<?php
	#Conectamos con la base de datos
	#Conected to mysql
	$conexion = mysql_connect("localhost","kitmaker","kitmaker") or die ("Fallo estableciendo la conexión con la base de datos");
	
	#Seleccionamos la base de datos a utilizar
	mysql_select_db("db_blog") or die("Error al seleccionar la base de datos");
	
	$titulo = $_POST['titulo'];
	$contenido = $_POST['contenido'];
	
	#Insertamos los datos
	$insertar = mysql_query ("INSERT INTO post(titulo, contenido, id_usuario) VALUES ('{$titulo}','{$contenido}',5)",$conexion);
	if (!$insertar){
		die("Error al insertar los datos:".mysql_error());
	}
	
// 	#Mostramos los resultados
// 	while ($row = mysql_fetch_array($result)){
// 		echo "<article><h4>".$row["titulo"]."</h4></article>";
// 	}
	
	#Cerramos la conexion con la base de datos
	mysql_close($conexion);
	
	header('Location: index.php');
?>