<?php
class Pony
{
	public $gender;
	public $name;
	public $color;

	public function __construct($gender, $name, $color){
		$this->gender = $gender;
		$this->name = $name;
		$this->color = $color;
	}

	public function __toString()
	{
	    return("Don’t worry, I’m a pony!".PHP_EOL);
	}

	/**********************/
	function __destruct(){
		echo "I'm a dead pony.".PHP_EOL;
	}
}
?>