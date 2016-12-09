<?php
	 $servidor="localhost";
	 $usuario="root";
	 $pass="";
	 $bd="vendimia";

	 $con=mysqli_connect($servidor,$usuario,$pass,$bd) or die("No se pudo conectar a la base de datos ");/*Verificacion a la conexion del servidor y base de datos*/
	 mysqli_set_charset($con,"utf8");


	// $servidor="localhost";/*Servidor donde se realiza la conexion*/
	// $usuario="root";/*Usuario del servidor*/
	// $pass="";/*Contraseña del servidor*/
	// $bd="inadem";/*Base de datos donde se realiza la conexion*/
	// $con=mysqli_connect($servidor,$usuario,$pass,$bd) or die("No se pudo conectar a la base de datos ");/*Verificacion a la conexion del servidor y base de datos*/
	// mysqli_set_charset($con,"utf8");
?>
