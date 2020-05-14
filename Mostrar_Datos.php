<?php 

	$conexion=mysqli_connect('127.0.0.1','root','','hope');

 ?>


<!DOCTYPE html>
<h1 align="center", style="background-color:Tomato;">
<font size=20, color="white", face="Comic Sans MS">  
HOPE
</font>
</h1>

<h1 align="center", style="background-color:#3fca52;">
<font size=5, color="white", face="Comic Sans MS">  
Infantes Reportados 
</font>
</h1>



<title>HOPE </title>
<body background="Fondo3.jpg"></body>

	<table border="1", style="text-align:center;">
		<tr>
			<td>Nombre</td>
			<td>Apellido Paterno</td>
			<td>Apellido Materno</td>
			<td>Edad</td>
			<td>Sexo</td>
			<td>Direccion</td>
			<td>Numero Exterior</td>
			<td>Colonia</td>
			<td>C.P</td>
			<td>Tipo de Reporte</td>
			<td>Resibe algun tipo de ayuda</td>
			<td>Ingresos semanales</td>
			<td>Habtantes del domicilio</td>
			<td>Situacion</td>	
		</tr>
		<body>
		<center>
</body>
</center>
<style type="text/css">
	body {font-family: Arial, Helvetica, sans-serif;}

table {     font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
    font-size: 12px;    margin: 45px;     width: 480px; text-align: left;    border-collapse: collapse; }

th {     font-size: 13px;     font-weight: normal;     padding: 8px;     background: #b9c9fe;
    border-top: 4px solid #aabcfe;    border-bottom: 1px solid #fff; color: #039; }

td {    padding: 8px;     background: #e8edff;     border-bottom: 1px solid #fff;
    color: #669;    border-top: 1px solid transparent; }

tr:hover td { background: #d0dafd; color: #339; }

</style>


		<?php 
		$sql="SELECT * from reporte";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['apellidop'] ?></td>
			<td><?php echo $mostrar['apellidom'] ?></td>
			<td><?php echo $mostrar['edadinfante'] ?></td>
			<td><?php echo $mostrar['sexoinfante'] ?></td>
			<td><?php echo $mostrar['direccioninfante'] ?></td>
			<td><?php echo $mostrar['numeroexteriorinfante'] ?></td>
			<td><?php echo $mostrar['coloniainfante'] ?></td>
			<td><?php echo $mostrar['cpinfante'] ?></td>
			<td><?php echo $mostrar['tiporeporteinfante'] ?></td>
			<td><?php echo $mostrar['tipodeayudainfante'] ?></td>
			<td><?php echo $mostrar['ingresosinfante'] ?></td>
			<td><?php echo $mostrar['numerofamiliainfante'] ?></td>
			<td><?php echo $mostrar['descripcioninfante'] ?></td>
		</tr>

	<?php 
	}
	 ?>
	</table>
<a class="boton_inicio" href="Pagina_Principal_HOPE.html">Inicio</a><br>
<style type="text/css">
  .boton_inicio{
    text-decoration: none;
    padding: 5px;
    font-weight: 300;
    font-size: 20px;
    color: #ffffff;
    background-color: #3fca52;
    border-radius: 6px;
    border: 2px solid 3fca52;
    font-family:'Comic Sans MS';
  }
</style>
</body>
</html>