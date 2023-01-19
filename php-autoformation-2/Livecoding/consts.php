<?php 

class Space {
    public $name;
    public $nickname;
    const DEMO = "This is a const demo";
    
    public function __construct($name, $nickname)
    {
        $this->name = $name;
        $this->nickname = $nickname;
        echo self::DEMO;
        echo "<br>";
        echo "<p>{$this->name}, {$this->nickname} </p>";
    }



}


$space = new Space("adnane", "tebbaa");















?>