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
		if(isset($_GET['id'])){
			require_once "procesos/eliminar.php";
		}
	?>
	<table>
		<thead>
			<tr>
				<th>id</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Email</th>
				<th>Actualizar</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<tbody>
			<?php
				require_once "procesos/seleccionar.php";
			?>		
		</tbody>
	</table>
	<a href="cierre.php?tk=<?php echo $_SESSION['token']; ?>">Cerrar sesion</a>
</body>
</html>