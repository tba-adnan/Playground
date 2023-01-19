<?php 

class Car {
    public $name;
    public $country;

function __construct($name, $country){
    $this->name = $name;
    $this ->country = $country;
    echo "demo";
}

function __destruct() {
    echo "Car name : {$this->name}  "; 
    echo "<br></br>";
    echo "Country {$this->country}";
}

}

$mycar = new Car("lambo", "italy");




?>