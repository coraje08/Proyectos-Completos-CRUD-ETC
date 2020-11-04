<?php 
	include_once "controller/control.php"; // 2 paso
	include_once "config/conexion.php";
	
	$Controller = new control();

	if (!isset($_REQUEST['c'])) {
		$Controller-> index();
	}else{
		$action = $_REQUEST['c'];
		call_user_func(array($Controller, $action)); 
	}
 ?>