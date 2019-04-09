<?php
class Car {
	function moveWheels() {
		echo 'Wheels move';
	}
}

if (method_exists('Car', 'moveWheels')) {
	echo 'The method exists!';
} else {
	echo 'No...';
}
