<?php
	//Actualizar datos
	if(isset($_POST['nombre']) && isset($_POST['apellido'])){
		$id=$_POST['id'];
		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		$emailA=$_POST['emailA'];
		$emailN=$_POST['emailN'];
		$claveN1=md5($_POST['claveN1']);
		$claveN2=md5($_POST['claveN2']);

		if($emailA!=$emailN){
			$consulta1=$pdo->prepare("SELECT * FROM usuario WHERE Email=:email");
			$consulta1->bindParam(":email",$emailN);
			$consulta1->execute();
			if($consulta1->rowCount()>=1){
				echo "Error: el email ya esta registrado";
				exit();
			}else{
				$emailF=$emailN;
			}
		}else{
			$emailF=$emailA;
		}

		if($claveN1!="" && $claveN2!=""){
			if($claveN1!=$claveN2){
				echo "Error: las claves no coinciden";
				exit();
			}else{
				$consulta2=$pdo->prepare("UPDATE usuario SET Nombre=:nombre,Apellido=:apellido,Email=:email,Clave=:clave WHERE id=:id");
				$consulta2->bindParam(":nombre",$nombre);
				$consulta2->bindParam(":apellido",$apellido);
				$consulta2->bindParam(":email",$emailF);
				$consulta2->bindParam(":clave",$claveN2);
				$consulta2->bindParam(":id",$id);
			}
		}else{
			$consulta2=$pdo->prepare("UPDATE usuario SET Nombre=:nombre,Apellido=:apellido,Email=:email WHERE id=:id");
			$consulta2->bindParam(":nombre",$nombre);
			$consulta2->bindParam(":apellido",$apellido);
			$consulta2->bindParam(":email",$emailF);
			$consulta2->bindParam(":id",$id);
		}

		if($consulta2->execute()){
			echo "Datos actualizados";
		}else{
			echo "Error: no se pudo actualizar los datos";
		}


	}

	//Recuperar datos
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		$consulta=$pdo->prepare("SELECT * FROM usuario WHERE id=:id");
		$consulta->bindParam(":id",$id);
		$consulta->execute();
		if($consulta->rowCount()>=1){
			$fila=$consulta->fetch();
			echo '<form action="" method="POST">
				<input type="hidden" name="id" value="'.$fila['id'].'">
				<label>Nombre</label><input type="text" value="'.$fila['Nombre'].'" name="nombre" required=""><br><br>
				<label>Apellido</label><input type="text" value="'.$fila['Apellido'].'" name="apellido" required=""><br><br>
				<input type="hidden" name="emailA" value="'.$fila['Email'].'">
				<label>Email</label><input type="email"  value="'.$fila['Email'].'" name="emailN" required=""><br><br>
				<p>Para actualizar la clave por favor ingrese la nueva clave y repitala</p>
				<label>Clave nueva</label><input type="password" name="claveN1"><br><br>
				<label>Repita Clave nueva</label><input type="password" name="claveN2"><br><br>
				<input type="submit" value="Actualizar">
			</form>';
		}else{
			echo "Ocurrio un error";
		}
	}else{
		echo "Error no se pudo procesar la peticion";
	}