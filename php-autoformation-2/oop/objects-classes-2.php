<?php 

class Students {
    public $name;
    public $nickname;

    function name($name) {
       $this->name = $name;
    }
    function getname() {
        return $this->name;
    }

}

$adnane = new Students();
$adnane -> name("Adnane tebbaa");
echo $adnane->getname();
echo "<br></br>";
var_dump($adnane instanceof Students);



?>