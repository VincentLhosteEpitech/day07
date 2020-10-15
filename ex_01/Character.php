<?php
class Character{
	//variables
	const CLASSE = "Character";
	protected $name;
	protected $life = 50;
	protected $agility = 2;
	protected $strength = 2;
	protected $wit = 2;

	function getName() {
		return $this->name;
	}

	function getLife() {
		return $this->life;
	}

	function getAgility() {
		return $this->agility;
	}

	function getStrength() {
		return $this->strength;
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
}

/*$perso = new Character("Gérard");
echo $perso->getName().PHP_EOL;
echo $perso->getLife().PHP_EOL;
echo $perso->getAgility().PHP_EOL;
echo $perso->getClasse().PHP_EOL;
?>
*/