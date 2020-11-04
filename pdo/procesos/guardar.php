<?php
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$email=$_POST['email'];
	$clave=md5($_POST['clave']);

	$consulta=$pdo->prepare("INSERT INTO usuario(Nombre,Apellido,Email,Clave) VALUES(?,?,?,?)");

	$consulta->bindParam(1,$nombre);
	$consulta->bindParam(2,$apellido);
	$consulta->bindParam(3,$email);
	$consulta->bindParam(4,$clave);

	if($consulta->execute()){
		echo "Datos almacenados";
	}else{
		echo "Error no se pudo almacenar los datos";
	}