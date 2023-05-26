<?php
	//chamando arquivo de classe
	include('exemplo.class.php');
	
	/*
	//instanciando uma vez
	$exemplo = new Exemplo();
	//setando valor
	$exemplo->var2 = 'Valcimar';

	//instanciando segunda vez
	$exemplo2 = new Exemplo();
	$exemplo2->var2 = 'Kelly';

	//exibindo
	echo $exemplo->var2;
	echo '</ br>';
	echo $exemplo2->var2;
	*/

	//instanciando objeto
	$exemplo = new Exemplo();
	//setando valor na variavel do metodo setVar1
	$exemplo->setVar1('Valcimar');
	//exibindo resultado atraves do metodo pegaVar1
	echo $exemplo->pegaVar1();

	echo '<hr/>';

	//instanciando objeto
	$exemplo2 = new Exemplo();
	//setando valor na variavel do metodo setVar1
	$exemplo2->setVar1('Kelly');
	//exibindo resultado atraves do metodo pegaVar1
	echo $exemplo2->pegaVar1();
?>