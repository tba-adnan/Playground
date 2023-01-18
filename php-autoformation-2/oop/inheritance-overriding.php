<?php

use Observatory as GlobalObservatory;

class Space {

 public $galaxy;
 public $planet;


 public function __construct($galaxy, $planet) {
    $this->galaxy = $galaxy;
    $this->planet = $planet;
 }

 protected function probe() {
    echo "<br></br>";
    echo "Our Galaxy is named {$this->galaxy} ";
    
 }

}

class Observatory extends Space {
    public $moon;
    public function __construct($galaxy, $moon, $planet) {
        $this->galaxy = $galaxy;
        $this->planet = $planet;
        $this->moon = $moon;
    }

    public function demo() {
        echo "this is a demo {$this->galaxy} and {$this->planet} and {$this->moon}";
        $this->probe();
    }
}


$space = new Observatory("Milky way", "moon", "earth");
$space->demo();
// $space->probe();




?>