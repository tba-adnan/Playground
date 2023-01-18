<?php 

class Cars {
 public $name;


 function __construct($name) {
    $this->name = $name;
 }

 function get() {
    return $this->name;
 }


}

$supercar = new Cars("buggati");
echo $supercar -> get();








?>