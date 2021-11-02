<?php 

	class addUsers extends Controller{
		public function __construct(){
			parent::__construct();

			$act = isset($_GET["act"])?$_GET["act"]:"";

			include "views/template.php";
		}
	}
	new addUsers();

 ?>