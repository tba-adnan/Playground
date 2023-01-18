<?php 

class Car {

public $name;
private $owner;
protected $id;

public function set_name($name) {
    $this -> name = $name;
}

private function set_owner($owner) {
    $this -> owner = $owner;
}

protected function set_id($id) {
    $this -> id = $id;
}

}

$carStore = new Car("demo", "test");
$carStore -> set_name("volvo");
// $carStore -> set_owner("adnane");




?>
