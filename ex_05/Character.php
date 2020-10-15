<?php

include_once("IMovable.php");
//include_once("Warrior.php");
//include_once("Mage.php");

abstract class Character implements IMovable {
	//variables
	protected $name;
	protected $life = 50;
	protected $agility = 2;
	protected $strengh = 2;
	protected $wit = 2;
	//constantes
	const CLASSE = 'Character';

	function getName() {
		return $this->name;
	}

	function getLife() {
		return $this->life;
	}

	function getAgility() {
		return $this->agility;
	}

	function getStrengh() {
		return $this->strengh;
	}

	function getWit() {
		return $this->wit;
	}

	function getClasse() {
		return self::CLASSE;
	}

	function __construct($name) {
		$this->name = $name;
	}

	public function moveRight()
	{
		echo $this->name . ": moves right.\n";
	}
	public function moveLeft()
	{
		echo $this->name . ": moves left.\n";
	}
	public function moveUP()
	{
		echo $this->name . ": moves up.\n";
	}
	public function moveDown()
	{
		echo $this->name . ": moves down.\n";
	}

	final public function unsheathe()
	{
		echo $this->name . ": unsheathes his weapon.\n";
	}
}

/*$warrior = new Warrior("Jean-Luc");
$warrior->moveRight();
$warrior->moveLeft();
$warrior->moveUp();
$warrior->moveDown();
*/
?>
