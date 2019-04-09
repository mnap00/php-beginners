<?php
class Car {
	function moveWheels() {
		echo 'Wheels move';
	}
}

$bmw = new Car();
$mercedes = new Car();

$bmw->moveWheels();
$mercedes->moveWheels();
