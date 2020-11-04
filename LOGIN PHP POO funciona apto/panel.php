<?php 
	session_start();
	include('config/db.php');
	include('userModel.php');
	include('userController.php');

	if(isset($_SESSION['usuario'])){
 ?>
 <?php require'partials/panel_header.php' ?>
 
 	<div class="container-fluid">
 		<div class="row">
 			<div class="col-md-2">
 				<h4 class=" m-4">
 					<?php 
 						echo $_SESSION['usuario']; // nombres de usuario aleluya
 					 ?>
 				</h4>
 			</div>
 			<div class="col-md-8 bg-dark p-4"></div>
 			<div class="col-md-2 p-2 text-center">
 				<a href="logout.php" class="btn btn-outline-dark">Logout</a>
 			</div>
 		</div>
 		<div class="row">
 			<div class="col-md-12">
 				
 			</div>
 		</div>
 	</div>
 		
 

 <?php require'partials/panel_footer.php' ?>
 <?php 
	}else{
		include('logout.php');
	}
  ?>