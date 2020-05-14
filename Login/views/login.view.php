<!DOCTYPE html>
<html lang="en">
<head>
<h1 align="center", style="background-color:Tomato;">
<font size=20, color="white", face="Comic Sans MS">  HOPE </font>
</h1>
<title>HOPE</title>
<body background="Fondo3.jpg"> <meta charset="utf-8">
</head>

<body>
	<div>
		<center>
		<h1 align="center", style="background-color:#3fca52;" class="titulo">
			<font size=5, color="white", face="Comic Sans MS">  Iniciar sesion </font></h1>

		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">
			<div><br>
				<font size=5, color="white", face="Comic Sans MS"> Usuario: </font></h1></br>
				<input type="text" name="usuario" class="usuario" placeholder="Usuario">
			</div>
			<div>
				<font size=5, color="white", face="Comic Sans MS">Contraseña: </font> </h1></br>
				<input type="password" name="password" class="password_btn" placeholder="Contraseña"><br><br>
				<button type="button" onclick="login.submit()">Iniciar Sesion</button>
			</div>

<!--Mensaje de error -->
			<?php if(!empty($errores)): ?>
				<div>
					<ul>
						<?php echo $errores; ?>
					</ul>
				</div>
			<?php endif; ?>
			
		</form>

		<p>
			¿Aun no tienes cuenta? <br>
			<a href="registrate.php">Registrate</a>
		</p>
		</Center>
	</div>
</body>
</html>