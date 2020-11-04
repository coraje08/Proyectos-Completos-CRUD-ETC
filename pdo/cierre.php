<?php
	session_start();
	if(isset($_GET['tk']) && isset($_SESSION['token']) && $_GET['tk']==$_SESSION['token']){
		session_destroy();
		header("Location: index.php");
	}