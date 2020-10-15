<?php
class Pony
{
	public $gender;
	public $name;
	public $color;

	function __construct($gender, $name, $color){
		$this->gender = $gender;
		$this->name = $name;
		$this->color = $color;
	}

	public function __toString()
	{
	    return("Don’t worry, I’m a pony!".PHP_EOL);
	}

	public function __call($method, $arguments)
	{
		echo "I don't know what to do...\n";
	}

	public function speak()
	{
		echo "Hiii hiii hiii\n";
	}

	/**********************/
	function __destruct(){
		echo "I'm a dead pony.".PHP_EOL;
	}
}

?>