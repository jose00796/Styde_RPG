<?php

abstract class Unit
{
    protected $alive = true;
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function move($direccion)
    {
        echo "<p>{$this->name} Avanza hacia $direccion";
    }

    abstract public function attack($opponent);
}

class Soldier extends Unit
{
    public function attack($opponent)
    {
        echo "<p>{$this->name} Ataca Con una Espada a $opponent porque se comio la Luz";
    }
}

class Archer extends Unit
{
    public function attack($opponent)
    {
        echo "<p>{$this->name} Dispara una Flecha a $opponent porque se comio la Luz";
    }   
}

