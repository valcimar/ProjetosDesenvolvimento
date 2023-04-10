<?php

	$arr = array('Valcimar','Kelly','Karol','Kika');

	//Percorrer array com FOREACH
	/*foreach ($arr as $key => $value){
		echo $key;
		echo ' => ';
		echo $value;
		echo '<hr>';
	}
	*/

	$total = count($arr);

	for($i = 0; $i < $total; $i++){
		echo $arr[$i];
		echo '<hr>';
	}
?>