<?php

class Dolly 
{
    public $age;
    public $animal;
    public $doctor;

    public function __construct($age, $animal, $doctor)
    {

    }

    public function __clone()
    {
        echo "I will survive !\n";
    }
}

function clone_object(object $object)
{
    $object2 = clone $object;
    return $object2;
}