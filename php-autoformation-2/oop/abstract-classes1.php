<?php

abstract class Car {
    public $name;
    public function __construct($name) {
      $this->name = $name;
    }
    abstract public function intro() : string;
  }
  
  // Child classes
  class Audi extends Car {
    public function intro() : string {
      return "This is a $this->name!";
    }
  }

  class Demo extends Car {
    public function intro(): string
    {
      return "test";
    }
  }


$audi = new Audi("test");
echo $audi->intro();
echo "<br></br>";
$demo = new Demo("demo");
echo $demo->intro();



?>