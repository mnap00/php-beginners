<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>25. Global Variable and Scope</title>
</head>
<body>

<?php

$x = 'outside'; // global scope

function convert() {
	global $x; // change scope to global
	$x = 'inside'; // local scope
}

echo $x;

echo '<br>';

convert();

echo $x;

?>

</body>
</html>
