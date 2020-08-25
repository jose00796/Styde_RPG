<?php

class BronceArmor implements Armor
{
    public function AbsorbDamage($damage)
    {
        return $damage / 2;
    }
}