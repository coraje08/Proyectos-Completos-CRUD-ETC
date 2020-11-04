<?php
session_start();	//inciamos secion
?>

		<?php
		// Validacion si envio desde el boton login
			include('serv.php');
				if(isset($_POST['login'])){
                    $entro=false;
					$usuario=$_POST['usuario'];
					$pw=$_POST['clave'];
                    $registros = "SELECT usuario FROM usuario WHERE usuario ='$usuario' AND clave='$pw'";
                    foreach($db->query($registros) as $fila) {  
                        
						$_SESSION["usuario"]=$fila['usuario'];
						echo '<script>alert("Usuario correcto"); </script>';
						echo '<script>window.location="panel.php"; </script>';	
                    }
                    $db = null;
                    if (!$entro){
                        echo '<script>alert("Usuario incorrecto"); </script>';
						echo '<script>window.location="iniciar.php"; </script>';	
                    }
				}
				if(isset($_POST['terminar'])){
				  echo '<script>window.location="iniciar.php"; </script>';
				}
		?>

