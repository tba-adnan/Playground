<?php 

interface Notification {
    public function main($demo);
}

class Device implements Notification {
    public function main($demo)
    {
        echo "This is notification inside device";
        echo "<br>";
        echo $demo;
    }
}


$phone = new Device();
$phone->main("test");















?>