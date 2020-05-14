<?php
$link = mysqli_connect("127.0.0.1","root","") or die ("<h2> No se encuentra el servidor </h2>");
$db = mysqli_select_db($link,"hope") or die ("<h2> Error de conexion</h2>");

	$tipoproyecto = $_POST ['TipoProyecto'];
	$nombre = $_POST ['NombreDonante'];
	$apellidop = $_POST ['ApellidoPaterno'];
	$apellidom = $_POST ['ApellidoMaterno'];
	$correodonante = $_POST ['CorreoDonante'];
	$cantidaddonacion = $_POST ['CantidadDonacion'];
	$mensajedonante = $_POST ['MensajeDonante'];

	mysqli_query ( $link, "INSERT INTO donacion VALUES ('$tipoproyecto','$nombre','$apellidop','$apellidom','$correodonante','$cantidaddonacion','$mensajedonante')") or die ("<h2>Error de conexion</h2>");
	require 'Donaciones.html';