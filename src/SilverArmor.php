<?php

class SilverArmor implements Armor
{
    public function AbsorbDamage($damage)
    {
        return $damage / 3;
    }
}
