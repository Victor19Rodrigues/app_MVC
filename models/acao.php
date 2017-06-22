<?php
	class acao extends model{

		public function add($nome, $email, $senha){
			$sql = "INSERT INTO usuario SET nome = '$nome', 
						email = '$email', senha = '$senha'";
			$sql = $this->db->query($sql);

			header("Location: /PHP/app_MVC/home");
		}

		public function editar($nome, $email, $id){

			$sql = "UPDATE usuario SET nome = '$nome', email = '$email' WHERE id = '$id'";
			$sql = $this->db->query($sql);

			header("Location: /PHP/app_MVC/home");
		}

		public function excluir($id){

			$sql = "DELETE FROM usuario WHERE id = '$id'";
			$sql = $this->db->query($sql);

			header("Location: /PHP/app_MVC/home");
		}
	}
?>