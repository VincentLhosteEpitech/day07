<?php
	spl_autoload_register(function ($class) {
		require_once $class . '.class.php';
	});
	//$a = new Gecko();
	//var_dump($a);
?>