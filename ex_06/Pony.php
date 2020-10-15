<?php
class Pony
{
	protected $gender;
	protected $name;
	protected $color;

	function __construct($gender, $name, $color){
		$this->gender = $gender;
		$this->gender = $name;
		$this->gender = $color;
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