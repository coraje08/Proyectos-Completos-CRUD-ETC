<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-8"><h2>Listado de  <b>Alumnos</b></h2></div>
                            <div class="col-sm-4">
                                <a href="create.php" class="btn btn-info add-new"><i class="fa fa-plus"></i> Agregar Alumno</a>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nombres</th>
                                <th>Teléfono</th>
                                <th>Email</th>
                                <th>Nota</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>

                            
                        <tbody>    

                            <?php 
                            while ($row=mysqli_fetch_object($listado)){
                            $id=$row->id;
                            $nombres=$row->nombres." ".$row->apellidos;
                            $telefono=$row->telefono;
                            $email=$row->correo_electronico;
                            $notas=$row->notas;
                            ?>
                            <tr>
                            <td><?php echo $nombres;?></td>
                            <td><?php echo $telefono;?></td>
                            <td><?php echo $email;?></td>
                            <td><?php echo $notas;?></td>
                            <td>
                            <a href="update.php?id=<?php echo $id;?>" class="edit" title="Editar" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="delete.php?id=<?php echo $id;?>" class="delete" title="Eliminar" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                            </td>
                            </tr>   
                            <?php
                            }
                            ?>

                           
                        </tbody>
                    </table>
                </div>
			</div>
		</div>
	</div>



</body>
</html>