<?php
	
	function myAutoLoad($class){
		//para trocar a contrabarra no caminho em servidores linux
		$class = str_replace('\\','/',$class);	

		if(file_exists('classes/'.$class.'.php')){
			include('classes/'.$class.'.php');
		}
	}

	spl_autoload_register('myAutoLoad');

?>