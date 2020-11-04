<?php
	$consulta=$pdo->prepare("SELECT * FROM usuario");
	$consulta->execute();
	if($consulta->rowCount()>=1){
		while($fila=$consulta->fetch()){
			echo "<tr>
					<td>".$fila['id']."</td>
					<td>".$fila['Nombre']."</td>
					<td>".$fila['Apellido']."</td>
					<td>".$fila['Email']."</td>
					<td><a href='datos.php?id=".$fila['id']."'>Actualizar</a></td>
					<td><a href='listado.php?id=".$fila['id']."'>Eliminar</a></td>
				</tr>";
		}
	}else{
		echo "<tr>
			<td colspan='4'>No hay datos</td>
		</tr>";
	}