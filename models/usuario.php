<?php
	
	/**
	 * Classe que toma conta do acesso de usuários
	 * 
	 * */
	class usuario extends model{

		public function acessar($email, $senha){
			
			$sql = "SELECT *FROM login WHERE email = '$email' AND senha = '$senha'";
			$sql = $this->db->query($sql);

			if($sql->rowCount() > 0){
				$dado = $sql->fetch(); //pega a primeira informação

				$_SESSION['id'] = $dado['id'];

				header("Location: /PHP/app_MVC/home");

			}
		}
	}
?>