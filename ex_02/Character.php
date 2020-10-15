<?php
class Character{
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
}

/*$perso = new Character("Gérard");
echo $perso->getName().PHP_EOL;
echo $perso->getLife().PHP_EOL;
echo $perso->getAgility().PHP_EOL;
echo $perso->getClasse().PHP_EOL;
?>
*/