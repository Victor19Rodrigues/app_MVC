<?php

	require 'config.php';

	/**
	 * Criação do autoload para requerer as classes que serão utilizadas
	 * @param function($class) uma função que manda a string do nome da classe
	 * */
	spl_autoload_register(function($class){

		//strpos Encontra a posição da primeira ocorrência da string Controller
		if(strpos($class, 'Controller') > -1){
			if(file_exists('controllers/'.$class.'.php')){ //caso o arquivo exista
				require_once 'controllers/'.$class.'.php';
			}
		}else if(file_exists('models/'.$class.'.php')){				
				require_once 'models/'.$class.'.php';		
		}else{
				require_once 'core/'.$class.'.php';
		}
		
	});

	//Core será a inicialização
	$core = new core();
	$core->run();
?>