<?php 
	include_once "resources/header.php"; // cabecera
 ?>
 
	<div class="container">		 
		<div class="row">
			<div class="col m12">
				<div class="card green white-text center-align">
					<h2 class="white-text">ZAPATERIA</h2>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col m12">
			    <tbody>  
					<table class="table-responsive orange z-depth-3">
						<tr>
							<?php 
								include_once "view.php";
							?>
						</tr>
                	</table>
                </tbody>
			</div>
		</div>
	</div>
<?php  
	include_once "resources/footer.php";
?>

