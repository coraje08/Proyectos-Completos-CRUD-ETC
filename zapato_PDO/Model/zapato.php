<?php

class zapato{

  public $CNX;
  public $id_zapato;
  public $precio;
  public $color;
  public $id_estilo;
  public $id_talla;
  public $id_genero;
  public $cantidad;



  public function __construct(){
    try{
      $this->CNX = conexion::conectar();
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function listar(){
    try {
      $query = "SELECT z.id_zapato,z.precio,z.color,e.estilo,t.talla,g.genero,z.cantidad FROM dbozapato z INNER JOIN dboestilo e on z.id_estilo = e.id_estilo INNER join dbotalla t on z.id_talla = t.id_talla INNER join dbogenero g on z.id_genero = g.id_genero";
      $smt = $this->CNX->prepare($query);
      $smt->execute();
      return $smt->fetchAll(PDO::FETCH_OBJ);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function cargarEstilo(){
    try {
      $query = "SELECT * FROM dboestilo";
      $smt = $this->CNX->prepare($query);
      $smt->execute();
      return $smt->fetchAll(PDO::FETCH_OBJ);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function cargarTalla(){
    try {
      $query = "SELECT * FROM dbotalla";
      $smt = $this->CNX->prepare($query);
      $smt->execute();
      return $smt->fetchAll(PDO::FETCH_OBJ);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function cargarGenero(){
    try {
      $query = "SELECT * FROM dbogenero";
      $smt = $this->CNX->prepare($query);
      $smt->execute();
      return $smt->fetchAll(PDO::FETCH_OBJ);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function cargarID($id){
    try {
      $query = "SELECT * FROM dbozapato where id_zapato=?";
      $smt = $this->CNX->prepare($query);
      $smt->execute(array($id));
      return $smt->fetch(PDO::FETCH_OBJ);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function delete($id){
    try {
    
      //$query = "DELETE FROM dbozapato WHERE dbozapato.id_zapato =?";
      $query = "delete FROM dbozapato WHERE id_zapato =?";
      $smt = $this->CNX->prepare($query);
      $smt->execute(array($id));
    } catch (\Exception $e) {
      die($e->getMessage());
    }


  }

  public function registrar(zapato $data){
    try {
      $query = "Insert into dbozapato (precio,color,id_estilo,id_talla,id_genero,cantidad) values (?,?,?,?,?,?)";
      $this->CNX->prepare($query)->execute(array($data->precio,$data->color,$data->id_estilo,$data->id_talla,$data->id_genero,$data->cantidad));

    } catch (\Exception $e) {
      die($e->getMessage());
    }

  }

  public function actualizarDatos(zapato $data){
    try {
      $query = "UPDATE dbozapato set precio=?,color=?,id_estilo=?,id_talla=?,id_genero=?,cantidad=? WHERE id_zapato=?";
      $this->CNX->prepare($query)->execute(array($data->precio,$data->color,$data->id_estilo,$data->id_talla,$data->id_genero,$data->cantidad,$data->id_zapato));

    } catch (\Exception $e) {
      die($e->getMessage());
    }

  }

}
 ?>
