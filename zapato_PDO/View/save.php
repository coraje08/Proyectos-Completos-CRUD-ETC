<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="Resources/css/materialize.css">
  </head>
  <body>
    <div class="container-fluid">
    <form action="?c=guardar" method="post">
      <div class="row">
        <div class="col m12">
          
        </div>
      </div>
      <div class="row">
        <div class="col m3">  </div>
        <div class="col m3">
          <h6>Precio: </h6>
          <input type="hidden" name="txtID" value="<?php echo $alm->id_zapato; ?>">
            <input type="text" name="txtPrecio" value="<?php echo $alm->precio; ?>">
        </div>
        <div class="col m3">  </div>
      </div>
      <div class="row">
        <div class="col m3">  </div>
        <div class="col m3">
          <h6>Color: </h6>
            <input type="text" name="txtColor" value="<?php echo $alm->color; ?>">
        </div>
        <div class="col m3">  </div>
      </div>
      <div class="row">
        <div class="col m3">  </div>
        
        <div class="col m3">
          <h6>Estlio: </h6>
          <select name="cmbEstilo">
            <?php foreach ($this->MODEL->cargarEstilo() as $k) : ?>
                <option value="<?php echo $k->id_estilo; ?>" <?php echo $k->id_estilo == $alm->id_estilo ? 'selected' : '' ?>> <?php echo $k->estilo ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="col m3">  </div>
      </div>
      <div class="row">
        <div class="col m3">  </div>
        
        <div class="col m3">
          <h6>Talla: </h6>
          <select name="cmbTalla">
            <?php foreach ($this->MODEL->cargarTalla() as $k) : ?>
                <option value="<?php echo $k->id_talla; ?>" <?php echo $k->id_talla == $alm->id_talla ? 'selected' : '' ?>> <?php echo $k->talla ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="col m3">  </div>
      </div>
      <div class="row">
        <div class="col m3">  </div>
        
        <div class="col m3">
          <h6>Genero: </h6>
          <select name="cmbGenero">
            <?php foreach ($this->MODEL->cargarGenero() as $k) : ?>
                <option value="<?php echo $k->id_genero; ?>" <?php echo $k->id_genero == $alm->id_genero ? 'selected' : '' ?>> <?php echo $k->genero ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="col m3">  </div>
      </div>
      <div class="row">
        <div class="col m3">  </div>
        
        <div class="col m3">
          <h6>Cantidad: </h6>
            <input type="text" name="txtCantidad" value="<?php echo $alm->cantidad; ?>">
        </div>
        <div class="col m3">  </div>
      </div>
      <div class="row">
        <div class="col m3"></div>
        <div class="col m6">
          <input type="submit" name="nytm" value="Guardar" class="btn green z-depth-3">
        </div>
        <div class="col m3">  </div>
      </div>
    </form>
  </div>
  <script type="text/javascript" src="Resources/js/jquery-3.5.1.min.js">  </script>
  <script type="text/javascript" src="Resources/js/materialize.js">  </script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('select').formSelect();
    })
  </script>
  </body>
</html>
