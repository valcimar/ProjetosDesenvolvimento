<?php

	class Pessoa{
	//objeto Pessoa

		//atributos
		private $nome = 'Valcimar';
		private $idade = '41';

		//m�todo crescer
		//Publico pode ser chamado de fora da classe
		public function crescer(){
			echo 'Metodo crescer';
			//chamando metodo private de dentro de um metodo public
			$this->comer();
		}

		//m�todo comer
		//Private so pode ser chamada dentro da classe
		private function comer(){
			echo 'Metodo comer';
		}
	}

	//Instanciar
	$pessoa = new Pessoa();

	//exibindo resultado chamando m�todo de dentro da classe
	$pessoa->crescer();
?>
