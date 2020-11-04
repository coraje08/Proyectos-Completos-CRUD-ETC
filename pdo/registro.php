<?php
	include "procesos/seguridad.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registrar datos</title>
</head>
<body>
	<a href="cierre.php?tk=<?php echo $_SESSION['token']; ?>">Cerrar sesion</a>
	<form action="" method="POST">
		<label>Nombre</label><input type="text" name="nombre" required=""><br><br>
		<label>Apellido</label><input type="text" name="apellido" required=""><br><br>
		<label>Email</label><input type="email" name="email" required=""><br><br>
		<label>Clave</label><input type="password" name="clave" required=""><br><br>
		<input type="submit" value="Guardar">
	</form>
	<?php
		if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['email']) && isset($_POST['clave'])){
			require_once "php/connect.php";
			require_once "procesos/guardar.php";
		}
	?>
</body>
</html>


