<?php // 1 paso
 include_once"model/zapato.php";

	class control{
		public $model; // paso 5

		public function __construct(){
			$this->model = new zapato();
		}

		public function index(){
			include_once "view/home.php";
		}


	}
 ?>

