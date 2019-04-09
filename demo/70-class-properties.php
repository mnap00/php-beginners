<?php
class Car {
	var $wheels = 4;
	var $hood = 1;
	var $engine = 1;
	var $door = 4;

	function moveWheels() {
		$this->wheels = 6;
	}

	function createDoor() {
		$this->door = 6;
	}
}

$bmw = new Car();
$truck = new Car();

//echo $bmw->whels = 8;
//$bmw->moveWheels();
echo $bmw->wheels . '<br>';

echo $truck->wheels = 10 . '<br>';

$truck->createDoor();
echo $truck->door;
