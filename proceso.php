<?php

function Show($message)
{
    echo "<p>$message</p>";
}

abstract class Unit
{
    protected $hp = 40;
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function move($direccion)
    {
        Show("<p>{$this->name} Avanza hacia $direccion");
    }

    public function GetName()
    {
        return $this->name;
    }

    public function GetHp()
    {
        return $this->hp;
    }

    public function SetHp($points)
    {
        $this->hp = $points;

        Show("{$this->GetName()} tiene {$this->GetHp()} Puntos de Vida");
    }

    public function die()
    {
        Show("<p>{$this->name} Ha Muerto por Becerro");

        exit();
    }

    abstract public function attack(Unit $opponent);

    public function takeDamage($damage)
    {
        $this->SetHp($this->hp - $this->AbsorbDamage($damage));

        if ($this->GetHp() <= 0) {
            $this->die();
        }
    }

    protected function AbsorbDamage($damage)
    {
        return $damage;
    }
}
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
class Archer extends Unit
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
        Show("<p>{$this->GetName()} Dispara una Flecha a {$opponent->GetName()} porque se comio la Luz");

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

interface Armor
{
    public function AbsorbDamage($damage);
}

class BronceArmor implements Armor
{
    public function AbsorbDamage($damage)
    {
        return $damage / 2;
    }
}

class SilverArmor implements Armor
{
    public function AbsorbDamage($damage)
    {
        return $damage / 3;
    }
}

class GoldArmor implements Armor
{
    public function AbsorbDamage($damage)
    {
        return $damage / 4;
    }
}
