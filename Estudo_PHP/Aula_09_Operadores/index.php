<?php
	$nome = 'Valcimar';
	$nome2 = 'Valcimar';

	$valor = 10;
	$valor2 = '10';

	//Confere se variaveis s�o iguais
	if($nome == $nome2){
		echo 'Nomes iguais';
	}

	//Confere se variaveis s�o diferentes
	if($nome != $nome2){
		echo 'Nomes diferentes';
	}

	//Conferir se s�o identicos. Mesmo valor e mesmo tipo
	if($valor === $valor2){
		echo 'Sao identicos';
	}else{
		echo 'N�o s�o identicos';
	}
?>