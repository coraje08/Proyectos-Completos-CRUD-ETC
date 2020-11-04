<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Inicio de sesion</title>
    <link rel="stylesheet" type="text/css" href="Resources/css/materialize.css">

</head>
<body>

<div class="row">
    <div class="col s12 m8 l4 offset-m2 offset-l4"><br><br><br>
        <div class="card">
            <div class="card-action green accent-4 white-text">
                <center><h3 >LOGIN CRUD</h3></center>
            </div>
				<form action="" method="POST">
			            <div class="card-content">

			                <div class="form-field">
			                    <label >Correo electronico</label>

			                    <input type="email"  name="email" required="">
			                </div><br>
			                <div class="form-field">
			                    <label >Contraseña</label>
			                    <input type="password" name="clave" required="">
			                </div><br>
								<input type="submit"  value="Ingresar" class="btn-large waves-effect green accent-4 " style="width:100%;">
							<br>
													
			            </div>
				</form>
        </div>
    </div>
</div>          
	<?php
		if(isset($_POST['email'])&&isset($_POST['clave'])){
			require_once "Login/conexion.php";
			require_once "login.php";
		}
	?>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>