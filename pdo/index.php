<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Inicio de sesion</title>
</head>
<body>
	<form action="" method="POST">
		<label>Email</label>
		<input type="email" name="email" required="">
		<br>
		<label>Clave</label>
		<input type="password" name="clave" required="">
		<br>
		<input type="submit" value="Ingresar">
	</form>
	<?php
		if(isset($_POST['email'])&&isset($_POST['clave'])){
			require_once "php/connect.php";
			require_once "procesos/login.php";
		}
	?>
</body>
</html>