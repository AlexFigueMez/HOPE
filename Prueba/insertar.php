<?php
$link = mysql_connect("localhost","root","") or die ("<h2> No se encuentra el servidor </h2>");
$db = mysql_select_db("hope", $link) or die ("<h2> Error de conexion</h2>");

	$nombre = $_POST ['NombreInfante'];

	mysql_query ( " INSERT INTO reporte VALUES ( ' ' , '$nombre')", $link) or die ("<h2>Error de conexion</h2>");
?>