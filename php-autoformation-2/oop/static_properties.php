<?php

use Galaxy as GlobalGalaxy;

class Galaxy {
    public $solar;
    public static $planet = "earth";
    
}

$galaxy = new GlobalGalaxy();
echo $galaxy::$planet;














?>