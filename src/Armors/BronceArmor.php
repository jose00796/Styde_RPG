<?php

namespace Styde\Armors;

use Styde\Armor;

class BronceArmor implements Armor
{
    public function AbsorbDamage($damage)
    {
        return $damage / 2;
    }
}