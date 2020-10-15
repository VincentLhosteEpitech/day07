<?php
<<<<<<< HEAD

=======
>>>>>>> 6e15d1acd2210635fcc9ab62e4bd2e8e528e8157
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

    public function __destruct()
    {
        echo $this->name . ": Aarrg I can't believe I'm dead...\n";
    }
}


/*$warrior = new Warrior("Jean-Luc");
$warrior->attack();*/

<<<<<<< HEAD
$warrior = new Warrior("Jean-Luc");
$warrior->moveRight();
$warrior->moveLeft();
$warrior->moveUp();
$warrior->moveDown();

=======
>>>>>>> 6e15d1acd2210635fcc9ab62e4bd2e8e528e8157
?>