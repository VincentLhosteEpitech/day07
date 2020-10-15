<?php

class Character 
{
    private $name = null;
    private $strength = 0;
    private $magic = 0;
    private $intelligence = 0;
    private $life = 100;
    public static $i = 1;

    public function __construct(string $name = null)
    {
        $this->name = $name;
        if ($this->name == null)
        {
            $this->name = self::$i;
            self::$i++;
        }
        else 
            $this->name;
    }

    protected function getName()
    {
        return $this->name;
    }

    protected function getStrength()
    {
        return $this->strength;
    }

    protected function getMagic()
    {
        return $this->magic;
    }

    protected function getIntelligence()
    {
        return $this->intelligence;
    }

    protected function getLife()
    {
        return $this->life;
    }

    public function __toString()
    {
        if (is_int($this->name))
            return "My name is Character " . $this->name . ".\n";
        else
            return "My name is " . $this->name . ".\n";
    }
}