<?php
	
	/**
	 *	Classe extend Controller, na qual é o controlador base 
	 * */
	class homeController extends controller{

		public function index(){

			session_start();

			if (!isset($_SESSION["id"])) {
				header("Location: /PHP/app_MVC/login");	
			}

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

			$dados = array();

			$this->loadTemplate('add', $dados);
			
			if(isset($_POST['nome']) && !empty($_POST['nome'])){
				$nome = addslashes($_POST['nome']);
				$email = addslashes($_POST['email']); //proteção
				$tel = addslashes($_POST['tel']);

				$acao = new acao();
				$acao->add($nome, $email, $tel);	
			}
		}

		public function editar(){

			$dados = array();

			$this->loadTemplate('editar', $dados);

			$id = 0;	

			if(isset($_GET['id']) && !empty($_GET['id'])){

				$id = addslashes($_GET['id']);
			}

			if(isset($_POST['nome']) && !empty($_POST['nome'])){
				$nome = addslashes($_POST['nome']);
				$email = addslashes($_POST['email']);
				$tel = addslashes($_POST['tel']);

				$acao = new acao();
				$acao->editar($nome, $email, $tel, $id);

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

		public function pesquisa(){
			
			if(isset($_POST['palavra']) && !empty($_POST['palavra'])){
				$nome = $_POST['palavra'];

				$acao = new acao();
				$dados['acao'] = $acao->pesquisa($nome);

				$this->loadTemplate('pesquisa', $dados);

			}else{
				header("Location: /PHP/app_MVC/home");
			}
		}								
	}
?>