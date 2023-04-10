<?php

	//$conteudo = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tincidunt urna eget ipsum commodo congue. Mauris aliquet nec erat a congue. Aliquam ut orci vel justo interdum scelerisque. Donec et elementum sem, eu auctor nibh. Quisque ex ligula, gravida at nunc vitae, scelerisque tincidunt massa. Integer at massa aliquam, interdum dolor non, condimentum urna. Integer iaculis ac est in pulvinar. Nam lacinia tincidunt mauris vel mollis. Curabitur et sollicitudin lectus, sed fermentum leo. Suspendisse feugiat bibendum lectus. Morbi placerat nibh eu dui faucibus euismod. Donec ultricies nisi leo, sit amet varius tortor molestie eget. Quisque vel volutpat sapien. Integer quis massa molestie, consequat ex et, interdum diam. Aliquam viverra lectus lorem, sed dapibus elit porta a. Vivamus vel aliquet tellus, in finibus lectus.';

	//serve para recortar uma string
	//echo substr($conteudo,0,20);

	/*
	//Separar uma string em array
	$nome = 'Valcimar Costa da Silva';
	
	$nomes = explode(' ', $nome);

	print_r($nomes);
	*/

	/*
	//Juntar array em uma string
	$nomeesobrenome = array('Kelly', 'Raposo', 'Silva');

	$nomecompleto = implode(' ',$nomeesobrenome);

	echo $nomecompleto;
	*/
	
	/*
	//Retirar tags html
	$frase = '<h1>Valcimar</h1>';

	echo strip_tags($frase);
	*/

	//htmlentities mostra tags html

	echo htmlentities('<div> </div>');
?>