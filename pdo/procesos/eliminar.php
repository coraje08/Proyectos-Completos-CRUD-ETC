<?php
	$id=$_GET['id'];
	$consulta2=$pdo->prepare("DELETE FROM usuario WHERE id=:id");
	$consulta2->bindParam(":id",$id);
	if($consulta2->execute()){
		echo "El registro se elimino con exito";
	}else{
		echo "Error: El registro no se elimino";
	}