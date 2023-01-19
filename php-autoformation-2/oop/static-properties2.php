<?php

use Galaxy as GlobalGalaxy;

class Galaxy {
    public static $planet = "earth";
    public $sun;

    public function __construct($sun){
        $this->sun = $sun;
        echo "$this->sun";
        echo "<br>";
        echo self::$planet;


    }

}

$galaxy = new GlobalGalaxy("test");










?>