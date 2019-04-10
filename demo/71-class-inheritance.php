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

class Plane extends Car {

	var $wheels = 20;
}

$jet = new Plane();

$jet->moveWheels();
echo $jet->wheels;

//if (class_exists('Plane')) {
//	echo 'It exists';
//}
