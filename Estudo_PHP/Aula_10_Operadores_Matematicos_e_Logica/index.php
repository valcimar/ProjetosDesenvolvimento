<?php
	$valor1 = 10;
	$valor2 = 11;

	$var1 = 'valor1';
	$var2 = 'valor2';
	$var3 = 'valor3';

	//Operadores Matemáticos
	/*if($valor1 > $valor2){
		echo 'valor 1 maior que valor 2';
	}else{
		echo 'valor 2 maior ou igual que valor 1';
	}

	if($valor1 >= $valor2){
		echo 'valor 1 maior ou igual que valor 2';
	}else{
		echo 'valor 2 maior que valor 1';
	}

	if($valor1 < $valor2){
		echo 'valor 1 menor que valor 2';
	}else{
		echo 'valor 2 menor ou igual que valor 1';
	}

	if($valor1 <= $valor2){
		echo 'valor 1 menor ou igual que valor 2';
	}else{
		echo 'valor 2 menor que valor 1';
	}*/

	/*//Operador lógico E - &&
	if(($var1 == $var2) && ($var2 == $var3)){
		echo 'Todas são iguais';
	}else{
		echo 'Há diferentes';
	}*/

	//Operador lógico Ou - ||
	if(($var1 == $var2) || ($var2 == $var3) || ($var1 == $var3)){
		echo 'Existe igual';
	}else{
		echo 'São todas diferentes';
	}






?>