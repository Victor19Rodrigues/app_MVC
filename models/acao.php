<?php
	class acao extends model{

		public function add($nome, $email, $tel){
			$sql = "INSERT INTO usuario SET nome = '$nome', 
						email = '$email', tel = '$tel'";
			$sql = $this->db->query($sql);

			header("Location: /PHP/app_MVC/home");
		}

		public function editar($nome, $email, $tel, $id){

			$sql = "UPDATE usuario SET nome = '$nome', email = '$email', tel = '$tel' WHERE id = '$id'";
			$sql = $this->db->query($sql);

			header("Location: /PHP/app_MVC/home");
		}

		public function excluir($id){

			$sql = "DELETE FROM usuario WHERE id = '$id'";
			$sql = $this->db->query($sql);

			header("Location: /PHP/app_MVC/home");
		}

		public function pesquisa($nome){

			$sql = "SELECT * FROM usuario WHERE nome LIKE '$nome%' ORDER BY nome ASC";
			$sql = $this->db->query($sql);

			$array = array();

			if($sql->rowCount() > 0){
				$array = $sql->fetchAll();
			}

			return $array;

		}
	}
?>