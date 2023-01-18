<?php

use Students as GlobalStudents;

class Students {
 public $name;
 public $nickname;


 public function __construct($name, $nickname)
 {
    $this->name = $name;
    $this->nickname = $nickname;
 }

 public function definition(){
    echo "<p> {$this->name}</p>";
    echo "<p> {$this->nickname}  </p>";
 }


}



$students = new Students("adnane", "tebbaa");
$students->definition();













?>