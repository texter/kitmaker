<?php
	#Conectamos con la base de datos
	#Conected to mysql
	$conexion = mysql_connect("localhost","kitmaker","kitmaker") or die ("Fallo estableciendo la conexión con la base de datos");
	
	#Seleccionamos la base de datos a utilizar
	mysql_select_db("db_blog") or die("Error al seleccionar la base de datos");
	
	$id_post = $_POST['id_post'];
	$mensaje = $_POST['contenido'];
	
	#Insertamos los datos
	$insertar = mysql_query ("INSERT INTO mensaje(id_post, contenido, id_usuario) VALUES ('{$id_post}','{$mensaje}',5)",$conexion);
	if (!$insertar){
		die("Error al insertar los datos:".mysql_error());
	}
	
	#Cerramos la conexion con la base de datos
	mysql_close($conexion);
	
	header('Location: index.php');
?>