<?php

class Gecko 
{
    public $friends = [];
    public Skill $skill;

    public function __construct(?array $friends, Skill $skill)
    {
        $this->friends = $friends;
        $this->skill = $skill;
    }
}

/*$titi=new Gecko(["sqlut", "toto"], new Skill());
var_dump($titi->friends);
*/
