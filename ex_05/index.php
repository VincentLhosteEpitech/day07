<?php
include_once("Mage.php");
include_once("Warrior.php");
$john = new Mage("John");
$john->moveUp();
$phuluppe = new Warrior("Phuluppe");
$phuluppe->moveDown();
?>
