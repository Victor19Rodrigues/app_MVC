<?php

	class loginController extends controller{

		public function index(){

			$this->loadTemplate('login', $dados);

			session_start();

			if(isset($_POST['email']) && !empty($_POST['email'])){
				$email = addslashes($_POST['email']);
				$senha = md5(addslashes($_POST['senha']));

				$usuario = new usuario();
				$usuario->acessar($email, $senha);

			}

		}

	}

?>