<?php
class Car {

	static $wheels = 4;
	var $hood = 1;

	static function moveWheels() {
		Car::$wheels = 6;
	}
}

$bmw = new Car();

//echo $bmw->wheels; // this will give error
					 // - it is attached to a class not its instance

Car::moveWheels();
echo Car::$wheels;
