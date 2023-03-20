<?php
	$nome = 'Valcimar';
	$nome2 = 'Valcimar';

	$valor = 10;
	$valor2 = '10';

	//Confere se variaveis são iguais
	if($nome == $nome2){
		echo 'Nomes iguais';
	}

	//Confere se variaveis são diferentes
	if($nome != $nome2){
		echo 'Nomes diferentes';
	}

	//Conferir se são identicos. Mesmo valor e mesmo tipo
	if($valor === $valor2){
		echo 'Sao identicos';
	}else{
		echo 'Não são identicos';
	}
?>