<?php
	class pagina extends model{

		/*public function __construct(){

			//roda o construtor de model
			//parent ele volta para o herdeiro, ou seja, roda o 
			//o construtor de model
			parent::__construct();
		}*/

		public function getPagina(){

			$array = array();

			$sql = "SELECT * FROM usuario ORDER BY nome ASC";
			$sql = $this->db->query($sql);

			if($sql->rowCount() > 0){
				$array = $sql->fetchAll();
			}

			return $array;

		}


	}
?>