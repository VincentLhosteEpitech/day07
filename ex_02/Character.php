<?php

include_once("IMovable.php");

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
}
?>
