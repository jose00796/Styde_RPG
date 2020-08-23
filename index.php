<?php
//22/08/2020 Repositorio Clonado en Casa, Guapo... 
require_once "proceso.php";

$jose = new Soldier('Jose');
$david = new Archer('David');

$jose->move('El Norte');
$jose->attack($david);
$david->attack($jose);