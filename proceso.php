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

    public function takeDamage($damage)
    {
        $this->SetHp($this->hp - $damage);

        if ($this->GetHp() <= 0) {
            $this->die();
        }
    }
}

class Soldier extends Unit
{
    protected $damage = 20;

    public function attack(Unit $opponent)
    {
        Show("<p>{$this->GetName()} Ataca Con una Espada a {$opponent->GetName()} porque se comio la Luz");

        $opponent->takeDamage($this->damage);
    }

    public function takeDamage($damage)
    {
        return parent::takeDamage($damage / 2);
    }
}

class Archer extends Unit
{
    protected $damage = 20;

    public function attack(Unit $opponent)
    {
        Show("<p>{$this->GetName()} Dispara una Flecha a {$opponent->GetName()} porque se comio la Luz");

        $opponent->takeDamage($this->damage);
    }   

    public function takeDamage($damage)
    {
        if (rand(0,1 )){
            return parent::takeDamage($damage);
        }else {
            Show("{$this->GetName()} Esquiva el Ataque Bruja");
        }

    }
}

