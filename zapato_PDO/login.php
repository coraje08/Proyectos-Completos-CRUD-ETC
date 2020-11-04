				
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
		//echo '<script>alert("Usuario correcto"); </script>';
		//echo '<script>window.location="valid.php"; </script>';	
		header("Location: valid.php");
	}else{
		echo '<script>alert("Usuario incorrecto"); </script>';

		echo '<script>window.location="index.php"; </script>';	
	
	}
?>

