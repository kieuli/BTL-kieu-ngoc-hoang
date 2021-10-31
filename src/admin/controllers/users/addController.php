<?php 

	class addUsers extends Controller{
		public function __construct(){
			parent::__construct();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch ($act) {
				case 'add':
					
					$username = $_POST["username"];
					$email = $_POST["email"];
					$password1 = $_POST["password1"];
					$password2 = $_POST["password2"];
					$permission = $_POST["permission"];
					$activated	=	$_POST["activated"];

					if ($password1 != $password2) {
						header("location: index.php?controller=users/add&err=false ");
					}
					else {
						$password = md5($password1);
						$token = new Token();
						$strToken = $token->generate(10);

<<<<<<< HEAD
						$this->Model->execute("insert into users(name,email,password,token) values('$username', '$email','$password','$strToken')");
						header("location: ../../index.php?controller=users/list ");
=======
						$this->Model->execute("insert into users(name,email,password,token,permission,activated) values('$username', '$email','$password','$strToken','$permission','$activated')");
						
>>>>>>> 0c0fe1f72428d21edcf002a92169879339f588b4
					}

					break;
			}

			include "views/users/addView.php";
		}
	}
	new addUsers();

 ?>