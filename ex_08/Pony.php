<?php
class Pony
{
	private $gender;
	private $name;
	private $color;

	function __construct($gender, $name, $color){
		$this->gender = $gender;
		$this->name = $name;
		$this->color = $color;
	}

	public function __get($property)
	{
		echo "There is no attribute:" . $property . ".\n";
	}

	public function getGender()
	{
		echo "It’s not right to get a private attribute!\n";
		return $this->gender;
	}
	
	public function getName()
	{
		echo "It’s not right to get a private attribute!\n";
		return $this->name;
	}

	public function getColor()
	{
		echo "It’s not right to get a private attribute!\n";
		return $this->color;
	}

	public function setGender($gender)
	{
		echo "It’s not right to set a private attribute!\n";
		return $this->gender = $gender;
	}

	public function setName($name)
	{
		echo "It’s not right to set a private attribute!\n";
		return $this->name = $name;
	}

	public function setColor($color)
	{
		echo "It’s not right to set a private attribute!\n";
		return $this->color = $color;
	}

	public function __set($property, $value)
	{
		echo "There is no attribute:" . $property . ".\n";
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