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
	<title>62. Setting Cookies</title>
</head>
<body>

</body>
</html>
