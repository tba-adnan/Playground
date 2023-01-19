<?php

use Galaxy as GlobalGalaxy;

class Galaxy {
    public $name;
    public $nickname;
    
    public static function intro_one() {
        echo "This is static function intro_one";
    }

}

class Solar extends GlobalGalaxy {
 
    public function __construct()
    {
        self::intro_one();
    }

}


$space = new Solar();















?>