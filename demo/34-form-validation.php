<?php

if (isset($_POST['submit'])) {
	$names = array('Dinsdale', 'Peter', 'Mohad', 'Maria', 'Tom', 'Jerry');

	$minimum = 5;
	$maximum = 15;

	$login = $_POST['login'];
	$password = $_POST['password'];

	if (strlen($login) < $minimum) {
		echo 'Login has to be longer than ' . $minimum . ' characters.';
	}

	if (strlen($login) > $maximum) {
		echo 'Login cannot be longer than ' . $maximum . ' characters.';
	}

	if (!in_array($login, $names)) {
		echo 'Sorry. You are not allowed.';
	} else {
		echo 'Welcome!';
	}

	//echo 'Hello ' . $login . ' ';
	//echo 'Your password is ' . $password . ' ';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>34. Validating Form Values</title>
</head>
<body>

<form action="34-form-validation.php" method="post">
	<input id="login" type="text" name="login" placeholder="Login ...">
	<input id="password" type="password" name="password" placeholder="Password ...">
	<br>
	<input type="submit" value="Submit" name="submit">
</form>

</body>
</html>
