<?php
	/**
	 *  Classe que inicializa a aplicação 
	 * 
	 * 
	 * */
	class core {
		
		//Método que inicializa a aplicação
		public function run(){
			//Pega o que o usuário digitou na url: $_SERVER['PHP_SELF']
			// O explode retorna tudo o que estiver na frente de index.php 
			$url = explode("index.php",$_SERVER['PHP_SELF']);

			//Pega o ultimo elemento do array $url
			$url = end($url); 
			//echo $url; --- retorna home

			$params = array();
			//caso o usuário digite a url
			if(!empty($url)){

				//Separa a url pela barra
				// Quando encontrar uma barra, o explode tira ela e pega somente o que
				// estiver na frente,
				//no caso, teremos somente: home
				$url = explode('/', $url);

				//Retira o primeiro elemento de um array
				array_shift($url);

				//seta as variáveis
				$currentController = $url[0].'Controller';

				//Como o controller ja está guardado na variavel $currentController,
				//tira ele do array
				array_shift($url);

				//caso o usuario digite algo depois de home
				if(isset($url[0])){
					//seta a variável
					$currentAction = $url[0];
					//Como a action ja esta guardado na variavel $currentAction,
					//tira ele do array
					array_shift($url);
				}else{
					//caso contrário
					$currentAction = "index";
				}

				if(count($url) > 0){
					$params = $url;
				}

			}else{
				//caso o usuário não digite nada
				//seta as variáveis
				$currentController = "loginController";
				$currentAction = "index";
			}

			require_once 'core/controller.php';

			$c = new $currentController(); //chama o controle especificado
			
			// .../home/posts/nome/sobrenome
			//      $c | $currentAction | $params
			call_user_func_array(array($c, $currentAction), $params); 

		}

	}
?>