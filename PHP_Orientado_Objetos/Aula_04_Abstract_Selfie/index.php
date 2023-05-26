<?php
	//Classe abstrata serve apenas para ser herdada. Não pode ser instanciada. Somente através de outra classe
	abstract class ClasseAbstrata{
		
		public function Func1(){
			echo 'Chamando Func1.';
		}

		abstract function Func2();
	}

	class Principal extends ClasseAbstrata{

		public function Func2(){
			echo 'Declarando metodo abstrato.';
		}
	}

	$principal = new Principal;

	$principal -> Func1();
	echo '<br/>';
	$principal -> Func2();

?>