<?php
class Vehicle {
    public function start() {
        echo "Vehicle is starting...<br>";
    }
}

class Car extends Vehicle {
    public function start() {
        echo "Car is starting with a key...<br>";
    }
}

class Bike extends Vehicle {
    public function start() {
        echo "Bike is starting with a kick...<br>";
    }
}

$myCar = new Car();
$myBike = new Bike();

$myCar->start();
$myBike->start();
?>
