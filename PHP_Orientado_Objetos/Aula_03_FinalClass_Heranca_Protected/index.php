<?php
	/*//Quando uma classe � final, ela n�o pode ser herdada em outra class atrav�s de extends. ex: class Pai extends Filha
	final class Filha{

		public function mostrarOla(){
			echo 'Ola mundo! Final class filha.';
		}
	}

	class Pai{

		public function mostrarTchau(){
			echo 'Tchau! class Pai.';
		}
	}
	*/
	//Neste formato a classe Filha herda os m�todos e atributos da classe Pai e posso instanciar classe filha com atributos e m�todos da classe Pai
	class Pai{
		
		protected function funcaoProtected(){
			echo 'Chamando funcao protected';
		}

		public function mostrarOla(){
			echo 'Ola mundo! Classe Pai.';
		}
	}
	//classe Filha herda os m�todos e atributos da classe Pai e posso instanciar classe filha com atributos e m�todos da classe Pai
	class Filha extends Pai{

		public function mostrarTchau(){
			echo 'Tchau! class Filha.';
			echo '<br />';
			$this->funcaoProtected();//aqui a funcao mostrarTchau recebe resultado da funcaoProtected
		}
	}

	$filha = new Filha;
	//$filha -> mostrarOla();
	$filha -> mostrarTchau();
?>