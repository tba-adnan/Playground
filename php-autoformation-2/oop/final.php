<?php 

class Galaxy {
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    
    final public function intro() {
        echo "<p>Test.</p>";
    }

}

class Planet extends Galaxy {
    public function test() {
        echo "test 2";
    }
 
}


$galaxy = new Planet("testing galaxy");
$galaxy->intro();
echo "<br>";
$planet->test();











?>