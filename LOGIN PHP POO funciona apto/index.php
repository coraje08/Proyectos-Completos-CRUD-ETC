<?php 
// esto es para saber si incio secion el uusario aleluya
	session_start();
	if(isset($_SESSION['usuario'])){
		header('Location: panel.php');
	}
	include('config/db.php');
	include('userModel.php');
	include('userController.php');

 ?>
<?php include('partials/header.php'); ?>

	<div class="container">
		<div class="row mt-3 justify-content-md-center">
			<div class="col-md-4">
				<form  action="" method="post">
					<div class="form-group">
						<input type="text" name="username" class="form-control" value="jeremy">
					</div>
					<div class="form-group">
						<input type="password" name="password" value="hola" class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-outline-warning btn-block" value="Entrar">
					</div>
				</form>
			</div>
		</div>
	</div>





























<?php include('partials/footer.php'); ?>
