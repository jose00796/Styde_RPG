<?php

class GoldArmor implements Armor
{
    public function AbsorbDamage($damage)
    {
        return $damage / 4;
    }
}