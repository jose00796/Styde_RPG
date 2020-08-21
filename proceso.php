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
    }

    abstract public function attack(Unit $opponent);
}

class Soldier extends Unit
{
    protected $damage = 20;

    public function attack(Unit $opponent)
    {
        Show("<p>{$this->GetName()} Ataca Con una Espada a {$opponent->GetName()} porque se comio la Luz");

        $opponent->SetHp($opponent->GetHp() - $this->damage);

        if ($opponent->GetHp() <= 0) {
            $opponent->die();
        }
    }
}

class Archer extends Unit
{
    protected $damage = 20;

    public function attack(Unit $opponent)
    {
        Show("<p>{$this->GetName()} Dispara una Flecha a {$opponent->GetName()} porque se comio la Luz");

        $opponent->SetHp($opponent->GetHp() - $this->damage);

        if ($opponent->GetHp() <= 0) {
            $opponent->die();
        }
    }   
}

