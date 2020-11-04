<?php
	$email=$_POST['email'];
	$clave=md5($_POST['clave']);

	$consulta=$pdo->prepare("SELECT * FROM usuario WHERE Email=:email AND Clave=:clave");
	$consulta->bindParam(':email',$email);
	$consulta->bindParam(':clave',$clave);
	$consulta->execute();
	if($consulta->rowCount()>=1){
		session_start();
		$fila=$consulta->fetch();
		$_SESSION['Nombre']=$fila['Nombre'];
		$_SESSION['Apellido']=$fila['Apellido'];
		$_SESSION['Email']=$fila['Email'];
		$_SESSION['token']=md5(uniqid(mt_rand(),true));
		header("Location: listado.php");
	}else{
		echo "ERROR los datos no son correctos";
	}