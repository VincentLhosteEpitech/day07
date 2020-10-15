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
		if ("gender" === $property)
		{
			echo "It’s not right to get a private attribute!\n";
			return $this->gender;
		}
		elseif ("name" === $property)
		{
			echo "It’s not right to get a private attribute!\n";
			return $this->name;
		}
		elseif ("color" === $property)
		{
			echo "It’s not right to get a private attribute!\n";
			return $this->color;
		}
		else 
			echo "There is no attribute:" . $property . ".\n";
	}

	public function __set($property, $value)
	{
		if ("gender" === $property)
		{
			$this->gender = $value;
		}
		elseif ("name" === $property)
		{
			$this->name = $value;
		}
		elseif ("color" === $property)
		{
			$this->color = $value;
		}
		else
		{
			echo "There is no attribute:" . $property . ".\n";
		}
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