<?php 

class Student {
    public $name;

    function name($name) {
        $this->name = $name;
      }

      function myname() {
        return $this->name;
      }

}


$adnane = new Student();
$adnane -> name("adnane");
echo $adnane->myname()


?>