<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Create Zapato</title>
<?php 
	include_once "../resources/css/bootstrap.php";
 ?>
</head>
<body>
    <div class="container">
       
            <div class="table-title">
                <div class="row p-4">
                    <div class="col-sm-8"><h2>Agregar <b>Zapato</b></h2></div>
             
                        <a href="../index.php" class="btn btn-info add-new"><i class="fa fa-arrow-left"></i> Regresar</a>
                   
                </div>
            </div>
            <?php
				include ("conexion.php");
				$zapato= new Database();
				if(isset($_POST) && !empty($_POST)){
					$precio = $zapato->sanitize($_POST['precio']);
					$color = $zapato->sanitize($_POST['color']);
					$estilo = $zapato->sanitize($_POST['estilo']);
					$talla = $zapato->sanitize($_POST['talla']);
					$genero = $zapato->sanitize($_POST['genero']);
					$cantidad = $zapato->sanitize($_POST['cantidad']);
					
					$res = $zapato->create($precio, $color, $estilo, $talla, $genero, $cantidad);
					if($res){
						$message= "Producto agregado con éxito";
						$class="alert alert-success";
						header('location: ../index.php');
					}else{
						$message="No se pudieron insertar los productos";
						$class="alert alert-danger";
					}
					
					?>
				<div class="<?php echo $class?>">
				  <?php echo $message;?>
				</div>	
					<?php
				}
	
			?>
			<div class="row">
			 <div class="col-md-4"></div>
			  <div class="col-md-4">
				<form method="post">
				<div class="col-md-12">
					<label>Precio:</label>
					<input type="number" name="precio" id="precio" class='form-control' maxlength="100" required >
				</div>
				<div class="col-md-12">
					<label>Color:</label>
					<input type="text" name="color" id="color" class='form-control' maxlength="100" required>
				</div>
				<div class="col-md-12">
					<label>Estilo:</label>
					<input type="text" name="estilo" id="estilo" class='form-control' maxlength="15" required >
				</div>
				<div class="col-md-12">
					<label>Talla:</label>
					<input type="number" name="talla" id="talla" class='form-control' maxlength="15" required >
				</div>
				<div class="col-md-12">
					<label>Genero:</label>
					<input type="text" name="genero" id="genero" class='form-control' maxlength="15" required >
				</div>
				<div class="col-md-12">
					<label>Cantidad:</label>
					<input type="number" name="cantidad" id="cantidad" class='form-control' maxlength="15" required >
				</div>

				<div class="col-md-12 pull-right">
				<hr>
					<button type="submit" class="btn btn-success">Agregar Producto</button>
				</div>
				</form>
			</div>
			</div>
		  <div class="col-md-4"></div>
        </div>
 
</body>
</html>