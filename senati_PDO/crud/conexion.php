<?php

class Database{
		private $con;
		private $dbhost="localhost";
		private $dbuser="root";
		private $dbpass="";
		private $dbname="zapateria";
		function __construct(){
			$this->connect_db();
		}
		public function connect_db(){
			$this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
			if(mysqli_connect_error()){
				die("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
			}
		}

		public function read(){
                    $sql = "SELECT * FROM dbzapato ";
                    $res = mysqli_query($this->con, $sql);
                    return $res;
                    }

           // aleluya Jehová
        //registro y actualizar
        public function sanitize($var){
		  $return = mysqli_real_escape_string($this->con, $var);
		  return $return;
		}
		public function create($precio,$color,$estilo,$talla,$genero,$cantidad){
			$sql = "INSERT INTO `dbzapato` (precio, color, estilo, talla, genero, cantidad) VALUES ('$precio', '$color', '$estilo', '$talla', '$genero', '$cantidad')";

			$res = mysqli_query($this->con, $sql);
			if($res){
			  return true;
			}else{
			return false;
		 }
		}


//
        public function single_record($id){
			$sql = "SELECT * FROM dbzapato where id='$id'";
			$res = mysqli_query($this->con, $sql);
			$return = mysqli_fetch_object($res );
			return $return ;
		}
		public function update($precio,$color,$estilo,$talla, $genero,$cantidad, $id){
			$sql = "UPDATE dbzapato SET precio='$precio', color='$color', estilo='$estilo', talla='$talla', genero='$genero', cantidad='$cantidad' WHERE id=$id";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}

		//delete

		public function delete($id){
			$sql = "DELETE FROM dbzapato WHERE id=$id";
			$res = mysqli_query($this->con, $sql);
			if($res){
			return true;
			}else{
			return false;
			}
		}

}
?>