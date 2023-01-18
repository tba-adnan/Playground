<?php



class Students {
 public $name;
 public $nickname;
 public function __construct($name, $nickname){
    $this->name = $name;
    $this->nickname = $nickname;
 }

 public function definition(){
    echo "<p> {$this->name}</p>";
    echo "<p> {$this->nickname}  </p>";
 }

}

class Teacher extends Students {
   public function testfunc() {
      echo "testing...";
   }
}


$student = new Teacher("adnane", "tebbaa");
$student->testfunc();
$student->definition();













?>