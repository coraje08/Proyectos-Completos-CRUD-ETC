<?php  
  
  
		include_once 'Controller/control.php';
		include_once 'Config/conexion.php';
		$Controller = new control();

		if(!isset($_REQUEST['c'])){
		  $Controller->index();
		}else{
		  $action = $_REQUEST['c'];
		  call_user_func(array($Controller,$action));
		}

?>