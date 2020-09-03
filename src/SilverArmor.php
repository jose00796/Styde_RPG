<?php

namespace Styde;

//use Warcraft\Armor;
class SilverArmor implements Armor
{
    public function AbsorbDamage($damage)
    {
        return $damage / 3;
    }
}
