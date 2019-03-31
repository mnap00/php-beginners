<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>23. Function Parameters</title>
</head>
<body>

<?php

function greeting($message) {
	echo $message;
}

greeting('Hello World!');

echo '<br>';

function addNumbers($number1, $number2) {
	$sum = $number1 + $number2;
	echo $sum;
}

addNumbers(12, 23);

?>

</body>
</html>
