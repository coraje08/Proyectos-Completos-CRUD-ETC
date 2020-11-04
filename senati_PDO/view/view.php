<?php 
include ('crud/conexion.php');
$clientes = new Database();
$listado=$clientes->read();
?>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Listado de  <b>Zapatos</b></h2></div>
                    <div class="col-sm-4">
                        <a href="crud/create.php" class="waves-effect waves-light btn"><i class="material-icons right">add_circle</i>Agregar</a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Precio</th>
                        <th>Color</th>
                        <th>Estilo</th>
                        <th>Talla</th>
                        <th>Genero</th>
                        <th>Cantidad</th>
                        <th>Opciones</th>
                    </tr>
                </thead>

                    
                <tbody>    

                    <?php 
                    while ($row=mysqli_fetch_object($listado)){
                    $id=$row->id;
                    $precio=$row->precio;
                    $color=$row->color;
                    $estilo=$row->estilo;
                    $talla=$row->talla;
                    $genero=$row->genero;
                    $cantidad=$row->cantidad;
                    ?>
                    <tr>
                    <td><?php echo $precio;?></td>
                    <td><?php echo $color;?></td>
                    <td><?php echo $estilo;?></td>
                    <td><?php echo $talla;?></td>
                    <td><?php echo $genero;?></td>
                    <td><?php echo $cantidad;?></td>
                    <td>
                    <a href="crud/update.php?id=<?php echo $id;?>" class="edit" title="Editar" data-toggle="tooltip"><i class="material-icons">&#xE254;</i> </a>
                    <a href="crud/delete.php?id=<?php echo $id;?>" class="delete" title="Eliminar" data-toggle="tooltip"><i class="material-icons"> &#xE872;</i></a>
                    </td>
                    </tr>   
                    <?php
                    }
                    ?>

                   
                </tbody>
            </table>
        </div>
    </div>     
