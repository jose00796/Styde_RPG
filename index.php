<?php
//22/08/2020 Repositorio Clonado en Casa, Guapo... 
require_once "proceso.php";

$jose = new Soldier('Jose');
$david = new Archer('David');

$jose->attack($david);
$david->attack($jose);
$david->SetArmor(new BronceArmor);
$jose->SetArmor(new GoldArmor);
$david->attack($jose);
$jose->attack($david);
