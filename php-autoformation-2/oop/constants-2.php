<?php

use Space as GlobalSpace;

class Space {
    public $galaxy;
    public $planet;
    public $moon;
    const ALL = "This is a const ";
    const ALL_TWO = "This is a const being called from class";


    public function __construct($galaxy, $planet, $moon){
        $this->galaxy = $galaxy;
        $this->planet = $planet;
        $this->moon = $moon;
        echo self::ALL_TWO;
     
    }

    public function demo()  {
        echo "<br></br>";
        echo "Element : {$this->moon}, {$this->planet}, {$this->galaxy}";
        echo "<p></p>";
       
    }


}

$space = new Space("Milky way", "earht", "moon");
$space->demo();
echo Space::ALL;
















?>