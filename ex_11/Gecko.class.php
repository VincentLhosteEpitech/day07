<?php
class Gecko
{
    public $friends = array();
    public Skill $skill;

    public function __construct(?array $friends, Skill $skill)
    {
        $this->friends = $friends;
        $this->skill = $skill;
    }
}
?>