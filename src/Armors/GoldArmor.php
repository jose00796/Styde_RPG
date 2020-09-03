<?php

namespace Styde\Armors;

use Styde\Armor;

class GoldArmor implements Armor
{
    public function AbsorbDamage($damage)
    {
        return $damage / 4;
    }
}