<?php
include_once("Character.php");

class Warrior extends Character 
{
    Const CLASSE = "Warrior";
    
    public function __construct($name)
    {   
        parent:: __construct($name);
        $this->name = $name;
        $this->life = 100;
        $this->agility = 10;
        $this->strength = 8;
        $this->wit = 3;

        echo $this->name . ": I'll engrave my name in history!\n";
    }
    public function attack()
    {
        echo $this->name . ": I'll crush you with my hammer!\n";
    }

    //MOVEMENTS

    public function moveRight()
    {
        echo $this->name . ": moves right like a bad boy.\n";
    }

    public function moveLeft()
    {
        echo $this->name . ": moves left like a bad boy.\n";
    }

    public function moveUP()
    {
        echo $this->name . ": moves up like a bad boy.\n";
    }

    public function moveDown()
    {
        echo $this->name . ": moves down like a bad boy.\n";
    }

    public function __destruct()
    {
        echo $this->name . ": Aarrg I can't believe I'm dead...\n";
    }
}


/*$warrior = new Warrior("Jean-Luc");
$warrior->attack();*/

?>