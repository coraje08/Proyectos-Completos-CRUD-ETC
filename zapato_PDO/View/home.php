<?php
  include "Login/seguridad.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="Resources/css/materialize.css">
  </head>
  <body>
    <div class="container-fuid">
      <div class="row">
        <div class="col m12">
          <div class="card orange z-depth-6 white-text center-align">
            <h2>Lista de Zapatos</h2>
          </div>
        </div>
        <a href="?c=nuevo" class="btn btn green z-depth-3 right">Agregar</a>
        <p class="btn btn green">Bienvenido <?php echo $_SESSION['Nombre']; ?></p>

        <a href="Login/logout.php" class="btn btn orange z-depth-3">Cerrar sesion</a>


      </div>

      <div class="row">

        <div class="col m12">
          <table class="table-responsive z-depth-3">
            <tr class="green">
              <th class="white-text center-align">Id</th>
              <th class="white-text center-align">Precio</th>
              <th class="white-text center-align">Color</th>
              <th class="white-text center-align">Estilo</th>
              <th class="white-text center-align">Talla</th>
              <th class="white-text center-align">Genero</th>
              <th class="white-text center-align">Cantidad</th>
              <th class="white-text center-align">Eliminar</th>
              <th class="white-text center-align">Actualizar</th>
            </tr>
            <?php  foreach ($this->MODEL->listar() as $k) : ?>
              <tr>
                <td><?php echo $k->id_zapato; ?></td>
                <td>$ <?php echo $k->precio; ?></td>
                <td><?php echo $k->color; ?></td>
                <td><?php echo $k->estilo; ?></td>
                <td><?php echo $k->talla; ?></td>
                <td><?php echo $k->genero; ?></td>
                <td><?php echo $k->cantidad; ?></td>
                <td>
                  <a href="?c=eliminar&id=<?php echo $k->id_zapato; ?>" class="btn red z-depth-3">Eliminar</a>
                </td>
                <td>
                  <a href="?c=nuevo&id=<?php echo $k->id_zapato; ?>" class="btn green z-depth-3">Actualizar</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </table>
          <br>
          
        </div>
      </div>
    </div>
  </body>
</html>


