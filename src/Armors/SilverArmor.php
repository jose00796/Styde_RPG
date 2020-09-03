<?php

namespace Styde\Armors;

use Styde\Armor;

class SilverArmor implements Armor
{
    public function AbsorbDamage($damage)
    {
        return $damage / 3;
    }
}
