<?php

	/**
	 * 	Classe base dos controlers
	 * 
	 * */
	class controller{

		//Método que carrega uma view
		public function loadView($viewName, $viewData = array()){

			/*extrai as variaveis de acordo com as chaves específicas 
			  da $viewData
			*/
			extract($viewData);

			//inclusão dos arquivos da pasta views/ de acordo com a $viewName 
			include 'views/'.$viewName.'.php';

		}

		//Método que carrega o template das views
		public function loadTemplate($viewName, $viewData = array()){

			//inclusão dos arquivos da pasta views/ de acordo com a $viewName 
			include 'views/template.php';
		}

		//Método que carrega a view dentro do template
		public function loadViewInTemplate($viewName, $viewData = array()){

			/*extrai as variaveis de acordo com as chaves específicas 
			  da $viewData
			*/
			extract($viewData);

			//inclusão dos arquivos da pasta views/ de acordo com a $viewName 
			include 'views/'.$viewName.'.php';
		}
	}
?>