<?php
include_once("Character.php");
<<<<<<< HEAD
=======

>>>>>>> 6e15d1acd2210635fcc9ab62e4bd2e8e528e8157
class Mage extends Character {

	protected $name;
	protected $life = 70;
	protected $agility = 10;
	protected $strengh = 3;
	protected $wit = 10;

	const CLASSE = 'Mage';

	function getClasse(){
		return static::CLASSE;
	}
	function attack(){
		echo $this->name.": feel the power of my magic!".PHP_EOL;
	}
	function __construct($name){
		$this->name = $name;
		echo $name.": May the gods be with me.".PHP_EOL;
	}
	function __destruct(){
		echo $this->name.": By the four gods, I passed away.".PHP_EOL;	
	}
}

//$perso = new Mage("Gérard");
//echo $perso->getName();
//echo $perso->getLife().PHP_EOL;
//echo $perso->getAgility().PHP_EOL;
//echo $perso->getClasse().PHP_EOL;
//echo $perso->attack();
?>