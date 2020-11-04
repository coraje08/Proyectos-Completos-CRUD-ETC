<?php 
if (isset($_GET['id'])){
	include('conexion.php');
	$cliente = new Database();
	$id=intval($_GET['id']);
	$res = $cliente->delete($id);
	if($res){
		header('location: index.php');
	}else{
		echo "Error al eliminar el registro";
	}
}
?>