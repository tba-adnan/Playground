<?php

use Galaxy as GlobalGalaxy;

class Galaxy {

    public $name;
    public $nickname;

    public static function static() {
        echo "This is a static method.";
    }

    private static function static_two() {
        echo "This is static method 2";
    }

    public function __construct(){
        $this->static_two();
    }

}


$galaxy = new GlobalGalaxy();
// $galaxy->static_two();
Galaxy::static();



?>