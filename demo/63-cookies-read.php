<?php

$name = 'SomeName';
$value = 100;
$expiration = time() + (60 * 60 * 24 * 7);

setcookie($name, $value, $expiration);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>63. Reading Cookies</title>
</head>
<body>

<?php

if (isset($_COOKIE['SomeName'])) {
	$some_one = $_COOKIE['SomeName'];
	echo $some_one;
} else {
	$some_one = '';
}

?>

</body>
</html>
