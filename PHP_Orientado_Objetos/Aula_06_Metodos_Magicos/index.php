<?php

	include('class1.php');

	$teste = new Class1('Valcimar',41);

	echo $teste -> getNome();
	echo '<br />';
	echo $teste ->getIdade();
?>