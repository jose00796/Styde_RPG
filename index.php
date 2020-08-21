<?php

require_once "proceso.php";

$jose = new Soldier('Jose');
$david = new Archer('David');

$jose->move('El Norte');
$jose->attack($david);
