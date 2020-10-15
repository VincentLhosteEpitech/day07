<?php

include_once("Character.php");

class Warrior extends Character 
{
    Const CLASSE = "Warrior";
    protected $name;
    protected $life = 100;
    protected $agility = 10;
    protected $strength = 8;
    protected $wit = 3;
    
    public function __construct($name)
    {
        $this->name = $name;

        echo $this->name . ": I'll engrave my name in history!\n";
    }
    public function attack()
    {
        echo $this->name . ": I'll crush you with my hammer!\n";
    }

    public function __destruct()
    {
        echo $this->name . ": Aarrg I can't believe I'm dead...\n";
    }
}


/*$warrior = new Warrior("Jean-Luc");
$warrior->attack();
*/
?>