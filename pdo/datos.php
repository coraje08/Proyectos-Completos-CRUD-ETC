<?php
	include "procesos/seguridad.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Leer o seleccionar datos de la base de datos</title>
</head>
<body>
	<p>Bienvenido <?php echo $_SESSION['Nombre']; ?></p>
	<?php
		require_once "php/connect.php";
		require_once "procesos/actualizar.php";
	?>
	<a href="cierre.php?tk=<?php echo $_SESSION['token']; ?>">Cerrar sesion</a>
</body>
</html>