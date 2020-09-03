<?php

namespace Styde;

//use Warcraft\Armor;
class GoldArmor implements Armor
{
    public function AbsorbDamage($damage)
    {
        return $damage / 4;
    }
}