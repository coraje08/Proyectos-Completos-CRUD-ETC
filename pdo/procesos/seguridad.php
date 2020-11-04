<?php
	session_start();
	if(!isset($_SESSION['Nombre'])){
		header("Location: index.php");
	}