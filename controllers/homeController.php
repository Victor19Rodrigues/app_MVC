<?php
	
	/**
	 *	Classe extend Controller, na qual é o controlador base 
	 * */
	class homeController extends controller{

		public function index(){

			$pagina = new pagina();
			$dados['pagina'] = $pagina->getPagina();

			$this->loadTemplate('home', $dados);
		}


		public function sair(){
		
			// inicia o manipulador de sessão
			session_start();

			// recupera o nome do identificador de sessão
			$cookie_name = session_name();

			// elimina todas as informações relacionadas à sessão atual
			session_destroy();

			// encerra o manipulador de sessão
			session_write_close();

			// limpa o cookie identificador de sessão
			setcookie($cookie_name, '', time());
			header("Location: /PHP/app_MVC/login");	
		}

		public function add(){

			$this->loadTemplate('add', $dados);
			
			if(isset($_POST['nome']) && !empty($_POST['nome'])){
				$nome = addslashes($_POST['nome']);
				$email = addslashes($_POST['email']); //proteção
				$senha = addslashes($_POST['senha']);

				$acao = new acao();
				$acao->add($nome, $email, $senha);	
			}
		}

		public function editar(){

			$this->loadTemplate('editar', $dados);

			$id = 0;	

			if(isset($_GET['id']) && !empty($_GET['id'])){

				$id = addslashes($_GET['id']);
			}

			if(isset($_POST['nome']) && !empty($_POST['nome'])){
				$nome = addslashes($_POST['nome']);
				$email = addslashes($_POST['email']);

				$acao = new acao();
				$acao->editar($nome, $email, $id);

			}	

		}

		public function excluir(){

			if(isset($_GET['id']) && !empty($_GET['id'])){
				$id = addslashes($_GET['id']);

				$acao = new acao();
				$acao->excluir($id);

			}else{
				header("Location: /PHP/app_MVC/home");
			}
		}						
	}
?>