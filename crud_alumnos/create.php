<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CRUD con PHP usando Programación Orientada a Objetos</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/lux/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
   
    .i{
        font-size: 60px;
        color: white;
    }
    .banner{
        height: 500px;
    }
</style>
</head>
<body>
    <div class="container-fluid">

    	<div class="row">
           <div class="col-md-2 bg-dark col-3">
           	<br>
                <h4 class="text-center  text-white">SENATI</h4>
           </div>
           <div class="col-md-8 bg-warning col-4">
                <h6 class="text-center p-4">Notas de alumnos</h6>
      
           </div>
           <div class="col-md-2 bg-warning p-3 col-5">
                <button class="btn btn-outline-dark ">Cerrar Secion</button>
           </div>
        </div><!----->

        <div class="row">
           <div class="col-md-2 bg-dark"> </div>
           <div class="col-md-10 p-4">
                


        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8">
                    	<h2 class="text-center">Agregar <b>Cliente</b></h2>
                    </div>
                    <div class="col-sm-4">
                    	<center>
                        <a href="index.php" class="btn btn-info add-new"><i class="fa fa-arrow-left"></i> Regresar</a>
                        </center>
                    </div>
                </div>
            </div>
            <?php
				include ("conexion.php");
				$alumnos= new Database();
				if(isset($_POST) && !empty($_POST)){
					$nombres = $alumnos->sanitize($_POST['nombres']);
					$apellidos = $alumnos->sanitize($_POST['apellidos']);
					$telefono = $alumnos->sanitize($_POST['telefono']);
					$correo_electronico = $alumnos->sanitize($_POST['correo_electronico']);
					$notas = $alumnos->sanitize($_POST['notas']);
					
					$res = $alumnos->create($nombres, $apellidos, $telefono,  $correo_electronico,$notas);
					if($res){
						$message= "Datos insertados con éxito";
						$class="alert alert-success";
						header('location: index.php');
					}else{
						$message="No se pudieron insertar los datos";
						$class="alert alert-danger";
					}
					
					?>
				<div class="<?php echo $class?>">
				  <?php echo $message;?>
				</div>	
					<?php
				}
	
			?>
			<div class="row ">
				<div class="col-md-12">
					<form method="post">
						<div class="col-md-12">
							<label>Nombres:</label>
							<input type="text" name="nombres" id="nombres" class='form-control' maxlength="100" required >
						</div>
						<div class="col-md-12">
							<label>Apellidos:</label>
							<input type="text" name="apellidos" id="apellidos" class='form-control' maxlength="100" required>
						</div>
						
						<div class="col-md-12">
							<label>Teléfono:</label>
							<input type="text" name="telefono" id="telefono" class='form-control' maxlength="15" required >
						</div>
						<div class="col-md-12">
							<label>Correo electrónico:</label>
							<input type="email" name="correo_electronico" id="correo_electronico" class='form-control' maxlength="64" required>
						
						</div>
						<div class="col-md-12">
							<label>Nota del alumno:</label>
							<input  name="notas" id="notas" class='form-control' required>
						</div>
						
						<div class="col-md-12 pull-right">
						<hr>
							<button type="submit" class="btn btn-success">Guardar datos</button>
						</div>
					</form>
				</div>
			</div>
		
			
        </div>
    </div><!-- fin del panel-- 1-->
</div><!----->


    </div>     
</body>
</html>