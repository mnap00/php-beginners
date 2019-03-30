<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>18. While Loop</title>
</head>
<body>

<?php

$counter = 0;

while ($counter < 10) {
	echo $counter . ' ';
	echo 'Hello!' . '<br>';
	$counter++;
	// long version below
	//$counter = $counter + 1;
}

?>

</body>
</html>
