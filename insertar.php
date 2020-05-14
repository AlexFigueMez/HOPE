<?php
$link = mysqli_connect("127.0.0.1","root","") or die ("<h2> No se encuentra el servidor </h2>");
$db = mysqli_select_db($link,"hope") or die ("<h2> Error de conexion</h2>");

	$nombre = $_POST ['NombreInfante'];
	$apellidop = $_POST ['ApellidoPaterno'];
	$apellidom = $_POST ['ApellidoMaterno'];
	$edadinfante = $_POST ['EdadInfante'];
	$sexoinfante = $_POST ['SexoInfante'];
	$direccioninfante = $_POST ['DireccionInfante'];
	$numeroexteriorinfante = $_POST ['NumeroExteriorInfante'];
	$coloniainfante = $_POST ['ColoniaInfante'];
	$cpinfante = $_POST ['CpInfante'];
	$tiporeporteinfante = $_POST ['TipoReporteInfante'];
	$tipodeayudainfante = $_POST ['TipoDeAyudaInfante'];
	$ingresosinfante = $_POST ['IngresosInfante'];
	$numerofamiliainfante = $_POST ['NumeroFamiliaInfante'];
	$descripcioninfante = $_POST ['DescripcionInfante'];




	mysqli_query ( $link, "INSERT INTO reporte VALUES ('$nombre','$apellidop','$apellidom','$edadinfante','$sexoinfante','$direccioninfante','$numeroexteriorinfante','$coloniainfante','$cpinfante','$tiporeporteinfante','$tipodeayudainfante','$ingresosinfante','$numerofamiliainfante','$descripcioninfante')") or die ("<h2>Error de conexion</h2>");
	require 'Reporte_Infante_Dos.html';
