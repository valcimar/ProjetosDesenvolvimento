<?php
	/*
	$nome = 'Kelly';

	switch($nome){
		case 'Valcimar':
			echo 'Nome e ' .$nome;
			break;
		case $nome != 'Valcimar';
			echo 'Diferente de Valcimar';
			break;
	}
	*/

	for($i = 1; $i <= 10; $i++){
		echo $i;
		echo '<hr>';
		if($i==5){
			break;
		}
	}
?>