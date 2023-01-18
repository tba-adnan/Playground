<?php 


class Car {

 public $car_name;
 public $country;

 function __construct($car_name, $country)
 {
    $this->name = $car_name;
    $this->country = $country;
 }

 function __destruct()
 {
    echo "car name :  {$this->name}";
    echo "<br></br>";
    echo "car country : {$this->country} "; 

 }

}


$mycar = new Car("lambo", "italy");








?>