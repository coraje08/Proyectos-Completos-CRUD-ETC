<?php 	// paso 3   aeluya
	if (isset($_POST['submit'])){ // para saer si se envio desde el boton del login
		$username = $_POST['username'];
		$password = $_POST['password'];
		if(empty($username) || empty($password)){
			echo "<div class='alert alert-danger'>Nombre de usuario y contrseña vacios</div>";
		}else{
			$user = new User; // instanciado del userModel

			if($user->getUser($username, $password)){
				session_start();
				$_SESSION['usuario'] = $username;
				header('Location: panel.php');
			}else{
				echo "<div class='alert alert-warning'>El usuario no existe</div>";
			}
		}
	}

 ?>
