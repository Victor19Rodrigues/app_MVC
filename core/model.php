<?php
	/**
	 * 	Classe base dos models
	 * 
	 * */
	class model{

		protected $db;

		public function __construct(){

			//importa a variavel global $config com as configurações do banco, 
			//provindas do arquivo config.php
			global $config;

			try{
				$this->db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], 
					$config['dbuser'], $config['dbpass']);
			}catch(PDOException $e){
				die($e->getMessage());
			}
		}
	}
?>