<?php
//22/08/2020 Repositorio Clonado en Casa, Guapo... 

namespace Styde;

require_once "../vendor/autoload.php";
require_once "../src/helpers.php";

/*spl_autoload_register(function($classname){
    if (strpos($classname, 'Styde\\') === 0) {
       
        $classname = str_replace('Styde\\', '', $classname);

        if (file_exists("src/$classname.php")) {
            require "src/$classname.php";
        }
    }        
});*/

$jose = new Soldier('Jose');
$david = new Archer('David');

$jose->attack($david);
$david->attack($jose);
$david->SetArmor(new BronceArmor);
$jose->SetArmor(new GoldArmor);
$david->attack($jose);
$jose->attack($david);
$jose->attack($david);
