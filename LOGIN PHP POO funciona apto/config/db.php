<?php 
	
	class Database{
		private $server;
		private $user;
		private $password;
		private $dbname;

		public function __construct(){
			$this->server = "localhost";
			$this->user = "root";
			$this->password = "";
			$this->dbname = "poo_login";
			

		}

		public function connect(){
			$conn = new mysqli($this->server, $this->user, $this->password, $this->dbname);
			return $conn;
		}

	}

 ?>