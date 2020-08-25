<?php
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
