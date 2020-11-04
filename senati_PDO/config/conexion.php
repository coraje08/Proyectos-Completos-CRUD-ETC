<?php // paso 3

class conexion{
		public static function conectar(){
			$x = new PDO("mysql: host=localhost; dbname=zapateria; charset=utf8", "root", "");
			$x->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $x;
		}
	}	
?>