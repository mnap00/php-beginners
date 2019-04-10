<?php
class Car {

	public $wheels = 4;
	protected $hood = 1;
	private $engine = 1;
	var $door = 4;

	function showProperty() {
		echo $this->hood;
	}
	function showEngine() {
		echo $this->engine;
	}
}

$bmw = new Car();

echo $bmw->wheels;
//echo $bmw->hood; // this will show error - $hood is available only within class
echo $bmw->showProperty();

class Semi extends Car {
	function showEngine() {
		echo $this->engine;
	}
}

$semi = new Semi();

echo $semi->showProperty();
//echo $semi->showEngine(); // this will show error
echo $bmw->showEngine();
