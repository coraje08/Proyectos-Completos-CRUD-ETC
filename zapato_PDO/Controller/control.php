<?php
  include_once 'Model/zapato.php'; // puedes borrarlo
class control{

  public $MODEL;

  public function __construct(){
    $this->MODEL = new zapato();
  }

  public function index(){
    include_once 'View/home.php';
  }

  public function nuevo(){
    $alm = new zapato();
    if(isset($_REQUEST['id'])){
      $alm= $this->MODEL->cargarID($_REQUEST['id']);

    }
    include_once 'View/save.php';
  }

  public function guardar(){
      $alm = new zapato();
      $alm->id_zapato = $_POST['txtID'];
      $alm->precio = $_POST['txtPrecio'];
      $alm->color = $_POST['txtColor'];
      $alm->id_estilo = $_POST['cmbEstilo'];
      $alm->id_talla = $_POST['cmbTalla'];
      $alm->id_genero = $_POST['cmbGenero'];
      $alm->cantidad = $_POST['txtCantidad'];

      $alm->id_zapato > 0 ? $this->MODEL->actualizarDatos($alm) : $this->MODEL->registrar($alm);

      header("Location: valid.php");
  }

  public function eliminar(){
    $this->MODEL->delete($_REQUEST['id']);
    header("Location: valid.php");

  }

}

 ?>
