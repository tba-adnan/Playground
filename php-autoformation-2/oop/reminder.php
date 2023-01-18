<?php 

class Reminder {

public $name;
public $nickname;

function __construct($name)
{
    $this->name = $name;
}

function __destruct()
{
    echo "my name is {$this->name} ";
}

}

$reminder = new Reminder("test");







?>