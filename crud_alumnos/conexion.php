<?php

class Database{
		private $con;
		private $dbhost="localhost";
		private $dbuser="root";
		private $dbpass="";
		private $dbname="crud_alumnos";
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
                    $sql = "SELECT * FROM alumnos";
                    $res = mysqli_query($this->con, $sql);
                    return $res;
                    }

           // aleluya Jehová
        //registro y actualizar
        public function sanitize($var){
		  $return = mysqli_real_escape_string($this->con, $var);
		  return $return;
		}
		public function create($nombres,$apellidos,$telefono,$correo_electronico,$notas){
			$sql = "INSERT INTO `alumnos` (nombres, apellidos, telefono, correo_electronico,notas) VALUES ('$nombres', '$apellidos', '$telefono','$correo_electronico', '$notas' )";
			$res = mysqli_query($this->con, $sql);
			if($res){
			  return true;
			}else{
			return false;
		 }
		}


//
        public function single_record($id){
			$sql = "SELECT * FROM alumnos where id='$id'";
			$res = mysqli_query($this->con, $sql);
			$return = mysqli_fetch_object($res );
			return $return ;
		}
		public function update($nombres,$apellidos,$telefono,$correo_electronico,$notas, $id){
			$sql = "UPDATE alumnos SET nombres='$nombres', apellidos='$apellidos', telefono='$telefono', correo_electronico='$correo_electronico',notas='$notas'  WHERE id=$id";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}

		//delete

		public function delete($id){
			$sql = "DELETE FROM alumnos WHERE id=$id";
			$res = mysqli_query($this->con, $sql);
			if($res){
			return true;
			}else{
			return false;
			}
		}

}
?>