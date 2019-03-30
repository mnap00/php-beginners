<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>22. Defining Functions</title>
</head>
<body>

<?php

function init() {
	calculate();
	echo '<br>';
	say_something();
}

function say_something() {
	echo 'Hello World!';
}

function calculate() {
	echo 345 * 53;
}

init();

?>

</body>
</html>
