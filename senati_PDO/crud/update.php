<?php
	if (isset($_GET['id'])){
		$id=intval($_GET['id']);
	} else {
		header("location:../index.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Update zapato</title>
<?php 
	include_once "../resources/css/bootstrap.php";
 ?>

</head>
<body>
    <div class="container">
            <div class="table-title">
                <div class="row p-4">
                    <div class="col-sm-8"><h2>Editar <b>Zapato</b></h2></div>
                        <a href="../index.php" class="btn btn-info add-new"><i class="fa fa-arrow-left"></i> Regresar</a>
                </div>
            </div>
            <?php
				
				include ("conexion.php");
				$producto= new Database();
				
				if(isset($_POST) && !empty($_POST)){
					$precio = $producto->sanitize($_POST['precio']);
					$color = $producto->sanitize($_POST['color']);
					$estilo = $producto->sanitize($_POST['estilo']);
					$talla = $producto->sanitize($_POST['talla']);
					$genero = $producto->sanitize($_POST['genero']);
					$cantidad = $producto->sanitize($_POST['cantidad']);

					$id=intval($_POST['id']);
					$res = $producto->update($precio, $color, $estilo, $talla, $genero, $cantidad, $id);
					if($res){
						//$message= "Datos actualizados con éxito";
						//$class="alert alert-success";
						header('location:../index.php');
						
					}else{
						$message="No se pudieron actualizar los datos";
						$class="alert alert-danger";
					}
					
					?>
				<div class="<?php echo $class?>">
				  <?php echo $message;?>
				</div>	
					<?php
				}
				$datos_zapato=$producto->single_record($id);
			?>

			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
			
				<form method="post">
				<div class="col-md-12">
					<label>Precio:</label>
					<input type="number" name="precio" id="precio" class='form-control' maxlength="100" required  value="<?php echo $datos_zapato->precio;?>">
					<input type="hidden" name="id" id="id" class='form-control' maxlength="100"   value="<?php echo $datos_zapato->id;?>">
				</div>
				<div class="col-md">
					<label>Color:</label>
					<input type="text" name="color" id="color" class='form-control' maxlength="100" required value="<?php echo $datos_zapato->color;?>">
				</div>
		
				<div class="col-md">
					<label>Estilo:</label>
					<input type="text" name="estilo" id="estilo" class='form-control' maxlength="15" required value="<?php echo $datos_zapato->estilo;?>">
				</div>
				<div class="col-md">
					<label>Talla:</label>
					<input type="text" name="talla" id="talla" class='form-control' maxlength="15" required value="<?php echo $datos_zapato->talla;?>">
				</div>
				<div class="col-md">
					<label>Genero:</label>
					<input type="text" name="genero" id="genero" class='form-control' maxlength="15" required value="<?php echo $datos_zapato->genero;?>">
				</div>
				<div class="col-md">
					<label>Cantidad:</label>
					<input type="text" name="cantidad" id="cantidad" class='form-control' maxlength="15" required value="<?php echo $datos_zapato->cantidad;?>">
				</div>

				
				
				<div class="col-md-12 pull-right">
				<hr>
					<button type="submit" class="btn btn-success">Actualizar Producto</button>
				</div>
				</form>
			</div>
			</div>
		   <div class="col-md-4"></div>
        </div>
  
</body>
</html>