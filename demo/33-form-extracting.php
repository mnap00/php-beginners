<?php

if (isset($_POST['submit'])) {
	$login = $_POST['login'];
	$password = $_POST['password'];

	echo 'Hello ' . $login . ' ';
	echo 'Your password is ' . $password . ' ';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>33. Extracting Information from Form</title>
</head>
<body>

<form action="33-form-extracting.php" method="post">
	<input id="login" type="text" name="login" placeholder="Login ...">
	<input id="password" type="password" name="password" placeholder="Password ...">
	<br>
	<input type="submit" value="Submit" name="submit">
</form>

</body>
</html>
