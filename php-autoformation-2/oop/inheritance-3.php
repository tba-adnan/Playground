<?php 
class Space {
    public $galaxy; 
    public $moon;

public function __construct($galaxy, $moon){
    $this->galaxy = $galaxy;
    $this->moon = $moon;
}

protected function get_names() {
    echo "<p>our galaxy is called {$this->galaxy}</p>";
    echo "<br></br>";
}}

class Observatory extends Space {
    public function observe() {
        echo "earht moon is called {$this->moon}";
        $this->get_names();

    }}

$observatory = new Observatory("milky way", "moon");
$observatory->observe();
?>