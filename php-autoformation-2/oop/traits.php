<?php 

trait Notification {
    public function message() {
        echo "This is a Message using Traits.";
    }

    public function notification() {
        echo "<br>";
        echo "This is a Notification.";
    }
}


class Main {
    use Notification;
}

$phone = new Main();
$phone->message();
$phone->notification();
?>