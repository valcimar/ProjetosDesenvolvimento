<?php

	class Exemplo{
		private $var1;
		public $var2;

		//metodo publico setando valor da variavel $var1
		public function setVar1($var1){
			$this->var1 = $var1;
		}

		//metodo realizando o retorno do metodo setVar1
		public function pegaVar1(){
			return $this->var1;
		}
	}
?>