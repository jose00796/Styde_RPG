<?php

namespace Styde;

use Warcraft\Armor;
class Soldier extends Unit
{
    protected $damage = 20;
    protected $armor;

    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function SetArmor(Armor $armor)
    {
        $this->armor = $armor;
        Show("{$this->GetName()} Obtiene una Armadura en medio de la Batalla");
    }

    public function attack(Unit $opponent)
    {
        Show("<p>{$this->GetName()} Ataca Con una Espada a {$opponent->GetName()} porque se comio la Luz");

        $opponent->takeDamage($this->damage);
    }

    protected function AbsorbDamage($damage)
    {
        if ($this->armor) {
            $damage = $this->armor->AbsorbDamage($damage);
        }

        return $damage;
    }
}