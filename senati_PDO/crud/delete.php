<?php 
if (isset($_GET['id'])){
	include('conexion.php');
	$producto = new Database();
	$id=intval($_GET['id']);
	$res = $producto->delete($id);
	if($res){
		header('location:../index.php');
	}else{
		echo "Error al eliminar el registro";
	}
}
?>