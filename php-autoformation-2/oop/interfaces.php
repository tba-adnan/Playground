<?php 

interface Notification {
    public function main();
}

class Device implements Notification {
    public function main()
    {
        echo "This is notification inside device";
    }
}


$phone = new Device();
$phone->main();















?>